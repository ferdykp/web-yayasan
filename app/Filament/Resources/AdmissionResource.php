<?php
namespace App\Filament\Resources;
class AdmissionResource extends ContentResource {
 protected static ?string $model=\App\Models\Admission::class;
 protected static ?string $navigationLabel='PPDB';
 protected static ?string $modelLabel='PPDB';
 public static function getPages():array {return ['index'=>AdmissionResource\Pages\ListRecords::route('/'),'create'=>AdmissionResource\Pages\CreateRecord::route('/create'),'edit'=>AdmissionResource\Pages\EditRecord::route('/{record}/edit')];}
}
