<?php
namespace App\Filament\Resources\ExtracurricularResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\ExtracurricularResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
