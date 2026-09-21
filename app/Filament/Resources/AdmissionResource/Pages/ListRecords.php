<?php
namespace App\Filament\Resources\AdmissionResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\AdmissionResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
