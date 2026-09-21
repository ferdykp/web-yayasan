<?php
namespace App\Filament\Resources;
class PageResource extends ContentResource {
 protected static ?string $model=\App\Models\Page::class;
 protected static ?string $navigationLabel='Halaman & Banner';
 protected static ?string $modelLabel='Halaman & Banner';
 public static function getPages():array {return ['index'=>PageResource\Pages\ListRecords::route('/'),'create'=>PageResource\Pages\CreateRecord::route('/create'),'edit'=>PageResource\Pages\EditRecord::route('/{record}/edit')];}
}
