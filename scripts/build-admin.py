exec(open('scripts/build-domain.py').read().split("put('database/migrations")[0])
fields={
'Foundation':{'short_name':'text','established_year':'number','legal_number':'text','history':'long','vision':'long','mission':'long','values':'long','chair_name':'text','chair_title':'text','chair_message':'long','chair_photo':'image','logo':'image','address':'long','phone':'text','whatsapp':'text','email':'email','maps_url':'url','social_media':'keyvalue','organization':'keyvalue','timeline':'keyvalue'},
'School':{'level':'level','short_name':'text','logo':'image','npsn':'text','accreditation':'text','school_status':'text','established_year':'number','principal_name':'text','principal_title':'text','principal_photo':'image','principal_message':'long','vision':'long','mission':'long','curriculum':'long','learning_approach':'long','evaluation':'long','address':'long','phone':'text','whatsapp':'text','email':'email','maps_url':'url','social_media':'keyvalue'},
'News':{'category':'text','author':'text','tags':'tags','photos':'images'},
'Achievement':{'student_name':'text','competition':'text','organizer':'text','rank':'text','level':'text','year':'number','category':'text'},
'Facility':{'category':'text','location':'text','specifications':'long','hours':'text'},
'Extracurricular':{'category':'text','schedule':'text'},
'Program':{'category':'text','curriculum':'long','evaluation':'long'},
'Gallery':{'date':'date','images':'images','video_url':'url','category':'text'},
'Admission':{'academic_year':'text','registration_start':'date','registration_end':'date','quota':'number','requirements':'long','documents':'long','stages':'long','selection_date':'date','announcement_date':'date','publish_fees':'toggle','registration_fee':'number','entrance_fee':'number','tuition_fee':'number','other_fees':'long','registration_url':'url','contact':'text','brochure':'pdf'},
'Statistic':{'value':'text','label':'text'},'Page':{}
}
import json
put('config/content.php', '<?php\nreturn '+str(fields).replace("'", "'").replace('{','[').replace('}',']').replace(':',' =>')+';\n') # valid PHP associative literals
put('app/Support/ContentFields.php',r'''<?php
namespace App\Support;
use Filament\Forms\Components\{TextInput,Textarea,Select,Toggle,DatePicker,DateTimePicker,FileUpload,TagsInput,KeyValue,Repeater};
use Filament\Schemas\Components\Section;
class ContentFields {
 public static function make(string $model):array {
 $name=class_basename($model);
 $fields=[TextInput::make('title')->label('Judul / Nama')->required()->maxLength(255),TextInput::make('slug')->required()->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/')->unique(ignoreRecord:true)->maxLength(255),Textarea::make('description')->label('Ringkasan')->rows(3)->columnSpanFull(),Textarea::make('content')->label('Isi lengkap')->rows(12)->columnSpanFull(),FileUpload::make('image')->label('Foto utama')->image()->acceptedFileTypes(['image/jpeg','image/png','image/webp'])->maxSize(5120)->disk('public')->directory('media')->visibility('public'),Select::make('status')->options(['draft'=>'Draft','published'=>'Published','archived'=>'Archived'])->required()->default('draft'),DateTimePicker::make('published_at')->label('Tanggal publikasi')->timezone('Asia/Jakarta'),TextInput::make('sort_order')->numeric()->default(0)->minValue(0)];
 if(!in_array($name,['Foundation','School']))$fields[]=Select::make('school_id')->label('Pemilik konten')->options(fn()=>\App\Models\School::query()->when(auth()->user()->role==='school_admin',fn($q)=>$q->whereKey(auth()->user()->school_id))->pluck('title','id'))->default(fn()=>auth()->user()->school_id)->disabled(fn()=>auth()->user()->role!=='super_admin')->dehydrated();
 if(in_array($name,['Facility','Extracurricular','Program']))$fields[]=Select::make('schools')->label('Digunakan oleh sekolah')->relationship('schools','title',modifyQueryUsing:fn($q)=>auth()->user()->role==='school_admin'?$q->whereKey(auth()->user()->school_id):$q)->multiple()->preload()->required();
 $specific=[];
 foreach(config('content.'.$name,[]) as $key=>$type){
 $path='data.'.$key;
 $field=match($type){
 'long'=>Textarea::make($path)->rows(5)->columnSpanFull(),
 'toggle'=>Toggle::make($path)->default(false),
 'date'=>DatePicker::make($path),
 'level'=>Select::make($path)->options(['SD'=>'SD','SMP'=>'SMP','SMA'=>'SMA'])->required(),
 'keyvalue'=>KeyValue::make($path)->columnSpanFull(),
 'tags'=>TagsInput::make($path),
 'image','images'=>FileUpload::make($path)->image()->acceptedFileTypes(['image/jpeg','image/png','image/webp'])->maxSize(5120)->disk('public')->directory('media')->visibility('public')->multiple($type==='images'),
 'pdf'=>FileUpload::make($path)->acceptedFileTypes(['application/pdf'])->maxSize(10240)->disk('public')->directory('brochures')->visibility('public'),
 default=>TextInput::make($path)->maxLength(2048)
 };
 if($type==='number')$field->numeric()->minValue(0);
 if($type==='email')$field->email();
 if($type==='url')$field->url()->rules(['nullable','regex:~^https?://~i']);
 $field->label(ucwords(str_replace('_',' ',$key)));$specific[]=$field;
 }
 if($name==='Page'){
 $specific[]=KeyValue::make('data.copy')->label('Teks halaman (kunci sesuai komponen desain)')->addable(false)->deletable(false)->editableKeys(false)->columnSpanFull();
 $specific[]=KeyValue::make('data.images')->label('URL gambar halaman (https atau path upload media)')->addable(false)->deletable(false)->editableKeys(false)->columnSpanFull();
 }
 return [Section::make('Konten')->schema($fields)->columns(2),Section::make('Informasi '.$name)->schema($specific)->columns(2),Section::make('SEO')->schema([TextInput::make('meta_title')->maxLength(70),Textarea::make('meta_description')->maxLength(180)])];
 }
}
''')
put('app/Support/ContentWrite.php',r'''<?php
namespace App\Support;
use Illuminate\Validation\ValidationException;
class ContentWrite {
 public static function prepare(array $data,string $model,?\App\Models\Content $record=null):array {
 $user=auth()->user();$name=class_basename($model);
 abort_unless($user&&in_array($user->role,['super_admin','foundation_admin','school_admin']),403);
 if($record)abort_unless($user->can('update',$record),403);
 if(!$record&&in_array($name,['Foundation','School','Page']))abort(403);
 if(!in_array($name,['Foundation','School'])&&$user->role!=='super_admin')$data['school_id']=$user->role==='school_admin'?$user->school_id:null;
 if($record&&in_array($name,['Foundation','School','Page']))$data['slug']=$record->slug;
 foreach(['registration_url','maps_url','video_url'] as $key){$url=data_get($data,'data.'.$key);if($url&&!preg_match('~^https?://~i',$url))throw ValidationException::withMessages(['data.'.$key=>'Gunakan URL HTTP atau HTTPS.']);}
 foreach(data_get($data,'data.images',[]) as $value){if(is_string($value)&&preg_match('~^[a-z]+:~i',$value)&&!preg_match('~^https?://~i',$value))throw ValidationException::withMessages(['data.images'=>'URL gambar tidak valid.']);}
 if($name==='Admission'){
 if(empty($data['school_id']))throw ValidationException::withMessages(['school_id'=>'Pilih sekolah.']);
 if(data_get($data,'data.registration_end')<data_get($data,'data.registration_start'))throw ValidationException::withMessages(['data.registration_end'=>'Tanggal akhir harus setelah tanggal mulai.']);
 }
 return $data;
 }
}
''')
put('app/Filament/Resources/ContentResource.php',r'''<?php
namespace App\Filament\Resources;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Illuminate\Database\Eloquent\Builder;
abstract class ContentResource extends Resource {
 public static function form(Schema $schema):Schema{return $schema->components(\App\Support\ContentFields::make(static::getModel()));}
 public static function getEloquentQuery():Builder{return parent::getEloquentQuery()->forAdmin(auth()->user());}
 public static function canCreate():bool{return !in_array(class_basename(static::getModel()),['Foundation','School','Page'])&&parent::canCreate();}
 public static function table(Table $table):Table{return $table->columns([TextColumn::make('title')->label('Judul')->searchable()->sortable()->wrap(),TextColumn::make('school.title')->label('Sekolah'),TextColumn::make('status')->badge(),TextColumn::make('published_at')->dateTime()->sortable(),TextColumn::make('updated_at')->since()])->filters([SelectFilter::make('status')->options(['draft'=>'Draft','published'=>'Published','archived'=>'Archived'])])->recordActions([EditAction::make()])->defaultSort('updated_at','desc');}
}
''')
labels={'Foundation':'Profil Yayasan','School':'Unit Sekolah','Page':'Halaman & Banner','News':'Berita','Achievement':'Prestasi','Facility':'Fasilitas','Extracurricular':'Ekstrakurikuler','Program':'Program Pendidikan','Gallery':'Galeri','Admission':'PPDB','Statistic':'Statistik'}
for m in models:
 resource=m+'Resource';ns='App\\Filament\\Resources\\'+resource+'\\Pages'
 put('app/Filament/Resources/'+resource+'.php',f'''<?php
namespace App\\Filament\\Resources;
class {resource} extends ContentResource {{
 protected static ?string $model=\\App\\Models\\{m}::class;
 protected static ?string $navigationLabel='{labels[m]}';
 protected static ?string $modelLabel='{labels[m]}';
 public static function getPages():array {{return ['index'=>{resource}\\Pages\\ListRecords::route('/'),'create'=>{resource}\\Pages\\CreateRecord::route('/create'),'edit'=>{resource}\\Pages\\EditRecord::route('/{{record}}/edit')];}}
}}
''')
 for typ in ['List','Create','Edit']:
  body={'List':"protected function getHeaderActions():array{return [\\Filament\\Actions\\CreateAction::make()];}",'Create':"protected function mutateFormDataBeforeCreate(array $data):array{return \\App\\Support\\ContentWrite::prepare($data,static::getResource()::getModel());}",'Edit':"protected function mutateFormDataBeforeSave(array $data):array{return \\App\\Support\\ContentWrite::prepare($data,static::getResource()::getModel(),$this->record);} protected function getHeaderActions():array{return [\\Filament\\Actions\\DeleteAction::make()];}"}[typ]
  cls=typ+('Records' if typ=='List' else 'Record')
  put(f'app/Filament/Resources/{resource}/Pages/{cls}.php',f'<?php\nnamespace {ns};\nclass {cls} extends \\Filament\\Resources\\Pages\\{cls} {{ protected static string $resource=\\App\\Filament\\Resources\\{resource}::class; {body} }}\n')
