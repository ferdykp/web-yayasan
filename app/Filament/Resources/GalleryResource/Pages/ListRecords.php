<?php
namespace App\Filament\Resources\GalleryResource\Pages;
class ListRecords extends \Filament\Resources\Pages\ListRecords { protected static string $resource=\App\Filament\Resources\GalleryResource::class; protected function getHeaderActions():array{return [\Filament\Actions\CreateAction::make()];} }
