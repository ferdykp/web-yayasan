<?php
namespace App\Filament\Resources;
class NewsResource extends ContentResource {
 protected static ?string $model=\App\Models\News::class;
 protected static ?string $navigationLabel='Berita';
 protected static ?string $modelLabel='Berita';
 public static function getPages():array {return ['index'=>NewsResource\Pages\ListRecords::route('/'),'create'=>NewsResource\Pages\CreateRecord::route('/create'),'edit'=>NewsResource\Pages\EditRecord::route('/{record}/edit')];}
}
