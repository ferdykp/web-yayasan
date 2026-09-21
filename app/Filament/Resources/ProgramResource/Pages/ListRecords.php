<?php
namespace App\Filament\Resources\ProgramResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\ProgramResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
