<?php
namespace App\Filament\Resources\ProgramResource\Pages;
class CreateRecord extends \Filament\Resources\Pages\CreateRecord { protected static string $resource=\App\Filament\Resources\ProgramResource::class; protected function mutateFormDataBeforeCreate(array $data):array{return \App\Support\ContentWrite::prepare($data,static::getResource()::getModel());} }
