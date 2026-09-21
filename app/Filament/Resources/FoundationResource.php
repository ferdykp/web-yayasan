<?php
namespace App\Filament\Resources;
class FoundationResource extends ContentResource {
 protected static ?string $model=\App\Models\Foundation::class;
 protected static ?string $navigationLabel='Profil Yayasan';
 protected static ?string $modelLabel='Profil Yayasan';
 public static function getPages():array {return ['index'=>FoundationResource\Pages\ListRecords::route('/'),'create'=>FoundationResource\Pages\CreateRecord::route('/create'),'edit'=>FoundationResource\Pages\EditRecord::route('/{record}/edit')];}
}
