<?php
namespace App\Filament\Resources;
class FacilityResource extends ContentResource {
 protected static ?string $model=\App\Models\Facility::class;
 protected static ?string $navigationLabel='Fasilitas';
 protected static ?string $modelLabel='Fasilitas';
 public static function getPages():array {return ['index'=>FacilityResource\Pages\ListRecords::route('/'),'create'=>FacilityResource\Pages\CreateRecord::route('/create'),'edit'=>FacilityResource\Pages\EditRecord::route('/{record}/edit')];}
}
