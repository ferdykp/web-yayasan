<?php
namespace App\Filament\Resources;
class AchievementResource extends ContentResource {
 protected static ?string $model=\App\Models\Achievement::class;
 protected static ?string $navigationLabel='Prestasi';
 protected static ?string $modelLabel='Prestasi';
 public static function getPages():array {return ['index'=>AchievementResource\Pages\ListRecords::route('/'),'create'=>AchievementResource\Pages\CreateRecord::route('/create'),'edit'=>AchievementResource\Pages\EditRecord::route('/{record}/edit')];}
}
