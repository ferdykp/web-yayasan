<?php
namespace App\Filament\Resources;
class ProgramResource extends ContentResource {
 protected static ?string $model=\App\Models\Program::class;
 protected static ?string $navigationLabel='Program Pendidikan';
 protected static ?string $modelLabel='Program Pendidikan';
 public static function getPages():array {return ['index'=>ProgramResource\Pages\ListRecords::route('/'),'create'=>ProgramResource\Pages\CreateRecord::route('/create'),'edit'=>ProgramResource\Pages\EditRecord::route('/{record}/edit')];}
}
