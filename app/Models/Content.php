<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
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
   if(in_array(static::class,[Facility::class,Program::class,Extracurricular::class]))$query->whereDoesntHave('schools',fn(Builder $q)=>$q->where('schools.id','!=',$user->school_id));
   return $query->where($this instanceof School ? 'id' : 'school_id',$user->school_id);
  }
  return $query->whereRaw('1=0');
 }
 public function school(){return $this->belongsTo(School::class);}
 public function text(string $key,string $fallback=''):string{return (string)data_get($this->data,'copy.'.$key,$fallback);}
 public function media(string $key):string{return self::mediaUrl(data_get($this->data,'images.'.$key,''));}
 public static function mediaUrl(?string $path):string{
  if(!$path)return ''; if(str_starts_with($path,'https://')||str_starts_with($path,'http://'))return $path;
  return \Illuminate\Support\Facades\Storage::disk('public')->url($path);
 }
 public function getImageUrlAttribute():string{return self::mediaUrl($this->image);}
 public function getPublicUrlAttribute():string {
  $prefix=match(static::class){School::class=>'sekolah',News::class=>'berita',Achievement::class=>'prestasi',Program::class=>'program',Gallery::class=>'galeri',Facility::class=>'fasilitas',Extracurricular::class=>'ekstrakurikuler',Admission::class=>'ppdb',default=>''};
  if($this instanceof Admission) return url('/ppdb/'.($this->school?->slug ?? $this->slug));
  return url('/'.$prefix.'/'.$this->slug);
 }
}
