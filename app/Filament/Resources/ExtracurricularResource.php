<?php
namespace App\Filament\Resources;
class ExtracurricularResource extends ContentResource {
 protected static ?string $model=\App\Models\Extracurricular::class;
 protected static ?string $navigationLabel='Ekstrakurikuler';
 protected static ?string $modelLabel='Ekstrakurikuler';
 public static function getPages():array {return ['index'=>ExtracurricularResource\Pages\ListRecords::route('/'),'create'=>ExtracurricularResource\Pages\CreateRecord::route('/create'),'edit'=>ExtracurricularResource\Pages\EditRecord::route('/{record}/edit')];}
}
