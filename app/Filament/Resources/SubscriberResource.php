<?php
namespace App\Filament\Resources;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Actions\DeleteAction;
class SubscriberResource extends Resource {
 protected static ?string $model=\App\Models\Subscriber::class;
 protected static ?string $modelLabel='Pelanggan Buletin';
 protected static ?string $pluralModelLabel='Pelanggan Buletin';
 public static function table(Table $table):Table{return $table->columns([TextColumn::make('email')->searchable(),TextColumn::make('consented_at')->label('Persetujuan diterima')->dateTime()->sortable()])->recordActions([DeleteAction::make()->label('Hentikan langganan')])->defaultSort('consented_at','desc');}
 public static function getPages():array{return ['index'=>SubscriberResource\Pages\ListSubscribers::route('/')];}
}
