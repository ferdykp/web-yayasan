<?php
namespace App\Support;
use Filament\Forms\Components\FileUpload;
use App\Models\Content;
class MediaUpload {
 public static function make(string $name):FileUpload {
 return FileUpload::make($name)->disk('public')->directory('media')->visibility('public')->preventFilePathTampering(allowFilePathUsing: static function(FileUpload $component,string $file):bool {
 $record=$component->getRecord();if(!$record)return false;
 return in_array($file,\Illuminate\Support\Arr::wrap(data_get($record->getOriginal(),$component->getName())),true);
 })->fetchFileInformation(false)->getUploadedFileUsing(static function(FileUpload $component,string $file):?array {
 if(preg_match('~^https?://~i',$file))return ['name'=>'Foto referensi','size'=>0,'type'=>'image/jpeg','url'=>$file];
 if(!$component->getDisk()->exists($file))return null;
 return ['name'=>basename($file),'size'=>$component->getDisk()->size($file),'type'=>$component->getDisk()->mimeType($file),'url'=>Content::mediaUrl($file)];
 });
 }
}
