<?php
namespace App\Filament\Resources\StatisticResource\Pages;
class CreateRecord extends \Filament\Resources\Pages\CreateRecord { protected static string $resource=\App\Filament\Resources\StatisticResource::class; protected function mutateFormDataBeforeCreate(array $data):array{return \App\Support\ContentWrite::prepare($data,static::getResource()::getModel());} }
