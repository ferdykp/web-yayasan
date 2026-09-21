<?php
namespace App\Filament\Resources;
class SchoolResource extends ContentResource {
 protected static ?string $model=\App\Models\School::class;
 protected static ?string $navigationLabel='Unit Sekolah';
 protected static ?string $modelLabel='Unit Sekolah';
 public static function getPages():array {return ['index'=>SchoolResource\Pages\ListRecords::route('/'),'create'=>SchoolResource\Pages\CreateRecord::route('/create'),'edit'=>SchoolResource\Pages\EditRecord::route('/{record}/edit')];}
}
