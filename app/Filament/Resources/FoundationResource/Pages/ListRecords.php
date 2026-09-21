<?php
namespace App\Filament\Resources\FoundationResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\FoundationResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
