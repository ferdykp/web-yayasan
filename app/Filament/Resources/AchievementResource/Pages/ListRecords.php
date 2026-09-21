<?php
namespace App\Filament\Resources\AchievementResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\AchievementResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
