<?php
namespace App\Filament\Resources\SchoolResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\SchoolResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
