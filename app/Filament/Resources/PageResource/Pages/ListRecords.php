<?php
namespace App\Filament\Resources\PageResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\PageResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
