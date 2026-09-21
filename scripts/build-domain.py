from pathlib import Path

def put(p,s): Path(p).parent.mkdir(parents=True,exist_ok=True);Path(p).write_text(s)
models={'Foundation':'foundations','School':'schools','Page':'pages','News':'news','Achievement':'achievements','Facility':'facilities','Extracurricular':'extracurriculars','Program':'programs','Gallery':'galleries','Admission':'admissions','Statistic':'statistics'}
put('database/migrations/2026_09_21_000001_create_portal_tables.php', '''<?php
use Illuminate\\Database\\Migrations\\Migration;
use Illuminate\\Database\\Schema\\Blueprint;
use Illuminate\\Support\\Facades\\Schema;
return new class extends Migration {
 public function up(): void {
''' + '\n'.join("Schema::create('"+table+"', function (Blueprint $table) {\n$table->id(); $table->string('title'); $table->string('slug')->unique(); $table->text('description')->nullable(); $table->longText('content')->nullable(); $table->string('image',2048)->nullable(); $table->string('status')->default('draft')->index(); $table->timestamp('published_at')->nullable()->index(); $table->unsignedInteger('sort_order')->default(0); $table->json('data')->nullable(); $table->string('meta_title')->nullable(); $table->text('meta_description')->nullable(); "+("$table->foreignId('school_id')->nullable()->constrained()->restrictOnDelete();" if model not in ['School','Foundation'] else '')+" $table->timestamps(); });" for model,table in models.items())+'''
 Schema::table('users',function(Blueprint $table){$table->string('role')->default('viewer');$table->foreignId('school_id')->nullable()->constrained()->restrictOnDelete();});
 foreach(['facility','extracurricular','program'] as $entity) {
 Schema::create($entity.'_school',function(Blueprint $table) use($entity){$table->id();$table->foreignId($entity.'_id')->constrained()->cascadeOnDelete();$table->foreignId('school_id')->constrained()->cascadeOnDelete();$table->unique([$entity.'_id','school_id']);});
 }
 Schema::create('inquiries',function(Blueprint $table){$table->id();$table->foreignId('school_id')->nullable()->constrained()->nullOnDelete();$table->string('type')->default('contact');$table->string('name');$table->string('email');$table->string('phone')->nullable();$table->text('message');$table->date('visit_date')->nullable();$table->string('status')->default('new');$table->timestamps();});
 Schema::create('subscribers',function(Blueprint $table){$table->id();$table->string('email')->unique();$table->timestamp('consented_at');$table->timestamps();});
 }
 public function down(): void {
 Schema::dropIfExists('subscribers');Schema::dropIfExists('inquiries');
 foreach(['facility','extracurricular','program'] as $entity) Schema::dropIfExists($entity.'_school');
 Schema::table('users',function(Blueprint $table){$table->dropConstrainedForeignId('school_id');$table->dropColumn('role');});
'''+''.join(f"Schema::dropIfExists('{t}');" for t in reversed(list(models.values())))+''' }
};
''')
put('app/Models/Content.php', '''<?php
namespace App\\Models;
use Illuminate\\Database\\Eloquent\\Model;
use Illuminate\\Database\\Eloquent\\Builder;
use Illuminate\\Support\\Facades\\Cache;
use Illuminate\\Support\\Str;
abstract class Content extends Model {
 protected $guarded=['id'];
 protected function casts():array{return ['data'=>'array','published_at'=>'datetime'];}
 protected static function booted():void {
  static::saving(function($record){
   if(!$record->slug) $record->slug=Str::slug($record->title);
   if($record->status==='published'&&!$record->published_at)$record->published_at=now();
  });
  static::saved(fn()=>Cache::forget('portal.shared'));
  static::deleted(fn()=>Cache::forget('portal.shared'));
 }
 public function scopePublished(Builder $query):Builder{return $query->where('status','published')->whereNotNull('published_at')->where('published_at','<=',now());}
 public function scopeForAdmin(Builder $query,User $user):Builder {
  if($user->role==='super_admin')return $query;
  if($user->role==='foundation_admin')return $this instanceof Foundation ? $query : ($this instanceof School ? $query->whereRaw('1=0') : $query->whereNull('school_id'));
  if($user->role==='school_admin'&&$user->school_id){
   if($this instanceof Foundation)return $query->whereRaw('1=0');
   return $query->where($this instanceof School ? 'id' : 'school_id',$user->school_id);
  }
  return $query->whereRaw('1=0');
 }
 public function school(){return $this->belongsTo(School::class);}
 public function text(string $key,string $fallback=''):string{return (string)data_get($this->data,'copy.'.$key,$fallback);}
 public function media(string $key):string{return self::mediaUrl(data_get($this->data,'images.'.$key,''));}
 public static function mediaUrl(?string $path):string{
  if(!$path)return ''; if(str_starts_with($path,'https://')||str_starts_with($path,'http://'))return $path;
  return \\Illuminate\\Support\\Facades\\Storage::disk('public')->url($path);
 }
 public function getImageUrlAttribute():string{return self::mediaUrl($this->image);}
 public function getPublicUrlAttribute():string {
  $prefix=match(static::class){School::class=>'sekolah',News::class=>'berita',Achievement::class=>'prestasi',Program::class=>'program',Gallery::class=>'galeri',Facility::class=>'fasilitas',Extracurricular::class=>'ekstrakurikuler',Admission::class=>'ppdb',default=>''};
  return url('/'.$prefix.'/'.$this->slug);
 }
}
''')
for model,table in models.items():
 extra=''
 if model in ['Facility','Extracurricular','Program']:extra="public function schools(){return $this->belongsToMany(School::class); }"
 if model=='School':extra="public function facilities(){return $this->belongsToMany(Facility::class);} public function programs(){return $this->belongsToMany(Program::class);} public function extracurriculars(){return $this->belongsToMany(Extracurricular::class);}"
 put('app/Models/'+model+'.php',f"<?php\nnamespace App\\Models;\nclass {model} extends Content {{ protected $table='{table}'; {extra} }}\n")
put('app/Models/Inquiry.php', "<?php\nnamespace App\\Models;\nuse Illuminate\\Database\\Eloquent\\Model;\nclass Inquiry extends Model { protected $guarded=['id']; public function school(){return $this->belongsTo(School::class);} }\n")
put('app/Models/Subscriber.php', "<?php\nnamespace App\\Models;\nuse Illuminate\\Database\\Eloquent\\Model;\nclass Subscriber extends Model {protected $guarded=['id'];}\n")
put('app/Policies/ContentPolicy.php', '''<?php
namespace App\\Policies;
use App\\Models\\{User,Content,Foundation,School,Page};
class ContentPolicy {
 public function viewAny(User $u):bool{return in_array($u->role,['super_admin','foundation_admin','school_admin']);}
 public function view(User $u,Content $record):bool{return $record->newQuery()->forAdmin($u)->whereKey($record->id)->exists();}
 public function create(User $u):bool{return $this->viewAny($u);}
 public function update(User $u,Content $record):bool{return $this->view($u,$record);}
 public function delete(User $u,Content $record):bool{return !($record instanceof Foundation||$record instanceof School||$record instanceof Page)&&$this->view($u,$record);}
 public function deleteAny(User $u):bool{return false;}
 public function restore(User $u,Content $record):bool{return false;}
 public function forceDelete(User $u,Content $record):bool{return false;}
}
''')
p=Path('app/Models/User.php');s=p.read_text().replace('class User extends Authenticatable','class User extends Authenticatable implements \\Filament\\Models\\Contracts\\FilamentUser');s=s.replace("'password',\n    ];","'password',\n        'role', 'school_id',\n    ];",1);s=s.replace('    /** @use',"    public function canAccessPanel(\\Filament\\Panel $panel): bool { return in_array($this->role, ['super_admin','foundation_admin','school_admin']) && ($this->role !== 'school_admin' || $this->school_id !== null); }\n\n    /** @use");p.write_text(s)
put('app/Providers/AppServiceProvider.php', '''<?php
namespace App\\Providers;
use Illuminate\\Support\\ServiceProvider;
use Illuminate\\Support\\Facades\\{Gate,View,Cache};
use App\\Models\\{Foundation,School,Page,News,Achievement,Facility,Extracurricular,Program,Gallery,Admission,Statistic};
class AppServiceProvider extends ServiceProvider {
 public function register():void{}
 public function boot():void {
 foreach([Foundation::class,School::class,Page::class,News::class,Achievement::class,Facility::class,Extracurricular::class,Program::class,Gallery::class,Admission::class,Statistic::class] as $model)Gate::policy($model,\\App\\Policies\\ContentPolicy::class);
 View::composer(['layouts.public','components.navbar','components.footer','components.inquiry-form'],function($view){
 $data=Cache::remember('portal.shared',300,fn()=>['foundation'=>Foundation::published()->first(),'schools'=>School::published()->orderBy('sort_order')->get()]);
 $view->with($data);
 });
 }
}
''')
