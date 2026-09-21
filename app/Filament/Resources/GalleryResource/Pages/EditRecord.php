<?php
namespace App\Filament\Resources\GalleryResource\Pages;
class EditRecord extends \Filament\Resources\Pages\EditRecord { protected static string $resource=\App\Filament\Resources\GalleryResource::class; protected function mutateFormDataBeforeSave(array $data):array{return \App\Support\ContentWrite::prepare($data,static::getResource()::getModel(),$this->record);} protected function getHeaderActions():array{return [\Filament\Actions\DeleteAction::make()];} }
