<?php
namespace App\Filament\Resources;
class StatisticResource extends ContentResource {
 protected static ?string $model=\App\Models\Statistic::class;
 protected static ?string $navigationLabel='Statistik';
 protected static ?string $modelLabel='Statistik';
 public static function getPages():array {return ['index'=>StatisticResource\Pages\ListRecords::route('/'),'create'=>StatisticResource\Pages\CreateRecord::route('/create'),'edit'=>StatisticResource\Pages\EditRecord::route('/{record}/edit')];}
}
