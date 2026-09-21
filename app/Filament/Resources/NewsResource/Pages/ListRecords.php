<?php
namespace App\Filament\Resources\NewsResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\NewsResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
