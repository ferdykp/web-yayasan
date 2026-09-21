<?php
namespace App\Filament\Resources;
class GalleryResource extends ContentResource {
 protected static ?string $model=\App\Models\Gallery::class;
 protected static ?string $navigationLabel='Galeri';
 protected static ?string $modelLabel='Galeri';
 public static function getPages():array {return ['index'=>GalleryResource\Pages\ListRecords::route('/'),'create'=>GalleryResource\Pages\CreateRecord::route('/create'),'edit'=>GalleryResource\Pages\EditRecord::route('/{record}/edit')];}
}
