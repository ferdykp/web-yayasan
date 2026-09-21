<?php
namespace App\Filament\Resources\StatisticResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\StatisticResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
