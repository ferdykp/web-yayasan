<?php
namespace App\Support;
use Filament\Forms\Components\{TextInput,Textarea,Select,Toggle,DatePicker,DateTimePicker,FileUpload,TagsInput,KeyValue,Repeater};
use Filament\Schemas\Components\Section;
class ContentFields {
 public static function make(string $model):array {
 $name=class_basename($model);
 $fields=[TextInput::make('title')->label('Judul / Nama')->required()->maxLength(255),TextInput::make('slug')->required()->regex('/^[a-z0-9]+(?:-[a-z0-9]+)*$/')->unique(ignoreRecord:true)->maxLength(255),Textarea::make('description')->label('Ringkasan')->rows(3)->columnSpanFull(),Textarea::make('content')->label('Isi lengkap')->rows(12)->columnSpanFull(),MediaUpload::make('image')->label('Foto utama')->image()->acceptedFileTypes(['image/jpeg','image/png','image/webp'])->maxSize(5120)->disk('public')->directory('media')->visibility('public'),Select::make('status')->options(['draft'=>'Draft','published'=>'Published','archived'=>'Archived'])->required()->default('draft'),DateTimePicker::make('published_at')->label('Tanggal publikasi')->timezone('Asia/Jakarta'),TextInput::make('sort_order')->numeric()->default(0)->minValue(0)];
 if(!in_array($name,['Foundation','School']))$fields[]=Select::make('school_id')->label('Pemilik konten')->options(fn()=>\App\Models\School::query()->when(auth()->user()->role==='school_admin',fn($q)=>$q->whereKey(auth()->user()->school_id))->pluck('title','id'))->default(fn()=>auth()->user()->school_id)->disabled(fn()=>auth()->user()->role!=='super_admin')->dehydrated();
 if(in_array($name,['Facility','Extracurricular','Program']))$fields[]=Select::make('schools')->label('Digunakan oleh sekolah')->relationship('schools','title',modifyQueryUsing:fn(\Illuminate\Database\Eloquent\Builder $query)=>auth()->user()->role==='school_admin'?$query->whereKey(auth()->user()->school_id):$query)->multiple()->preload()->required();
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
 'image','images'=>MediaUpload::make($path)->image()->acceptedFileTypes(['image/jpeg','image/png','image/webp'])->maxSize(5120)->disk('public')->directory('media')->visibility('public')->multiple($type==='images'),
 'pdf'=>MediaUpload::make($path)->acceptedFileTypes(['application/pdf'])->maxSize(10240)->disk('public')->directory('brochures')->visibility('public'),
 default=>TextInput::make($path)->maxLength(2048)
 };
 if($type==='number')$field->numeric()->minValue(0);
 if($type==='email')$field->email();
 if($type==='url')$field->url()->rules(['nullable','regex:~^https?://~i']);
 $field->label(ucwords(str_replace('_',' ',$key)));$specific[]=$field;
 }
 if($name!=='Page') $specific[]=KeyValue::make('data.copy')->label('Teks pelengkap kartu')->editableKeys(false)->addable(false)->deletable(false)->columnSpanFull();
 if($name==='Page'){
 $specific[]=KeyValue::make('data.copy')->label('Teks halaman (kunci sesuai komponen desain)')->addable(false)->deletable(false)->editableKeys(false)->columnSpanFull();
 $specific[]=KeyValue::make('data.images')->label('URL gambar halaman (https atau path upload media)')->addable(false)->deletable(false)->editableKeys(false)->columnSpanFull();
 }
 return [Section::make('Konten')->schema($fields)->columns(2),Section::make('Informasi '.$name)->schema($specific)->columns(2),Section::make('SEO')->schema([TextInput::make('meta_title')->maxLength(70),Textarea::make('meta_description')->maxLength(180)])];
 }
}
