<?php
namespace App\Support;
use Illuminate\Validation\ValidationException;
class ContentWrite {
 public static function prepare(array $data,string $model,?\App\Models\Content $record=null):array {
 $user=auth()->user();$name=class_basename($model);
 abort_unless($user&&in_array($user->role,['super_admin','foundation_admin','school_admin']),403);
 if($record)abort_unless($user->can('update',$record),403);
 if($user->role==='school_admin')abort_unless($user->school_id,403);
 if($record)$data['data']=array_replace($record->data ?? [],$data['data'] ?? []);
 if(!$record&&in_array($name,['Foundation','School','Page']))abort(403);
 if(!in_array($name,['Foundation','School'])&&$user->role!=='super_admin')$data['school_id']=$user->role==='school_admin'?$user->school_id:null;
 if($record&&in_array($name,['Foundation','School','Page']))$data['slug']=$record->slug;
 foreach(data_get($data,'data.social_media',[]) as $url){if(!filter_var($url,FILTER_VALIDATE_URL)||!preg_match('~^https?://~i',$url))throw ValidationException::withMessages(['data.social_media'=>'Gunakan URL HTTP atau HTTPS yang valid.']);}
 foreach(['registration_url','maps_url','video_url'] as $key){$url=data_get($data,'data.'.$key);if($url&&(!filter_var($url,FILTER_VALIDATE_URL)||!preg_match('~^https?://~i',$url)))throw ValidationException::withMessages(['data.'.$key=>'Gunakan URL HTTP atau HTTPS.']);}
 foreach(data_get($data,'data.images',[]) as $value){if(is_string($value)&&preg_match('~^[a-z]+:~i',$value)&&!preg_match('~^https?://~i',$value))throw ValidationException::withMessages(['data.images'=>'URL gambar tidak valid.']);}
 if($name==='Admission'){
 if(empty($data['school_id']))throw ValidationException::withMessages(['school_id'=>'Pilih sekolah.']);
 if(data_get($data,'data.registration_end')<data_get($data,'data.registration_start'))throw ValidationException::withMessages(['data.registration_end'=>'Tanggal akhir harus setelah tanggal mulai.']);
 }
 return $data;
 }
}
