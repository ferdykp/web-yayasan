<?php

namespace App\Filament\Resources\GalleryResource\Pages;

class CreateRecord extends \Filament\Resources\Pages\CreateRecord
{
    protected static string $resource = \App\Filament\Resources\GalleryResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        return \App\Support\ContentWrite::prepare($data, static::getResource()::getModel());
    }
}
