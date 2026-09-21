<?php
namespace App\Filament\Resources;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Illuminate\Database\Eloquent\Builder;
abstract class ContentResource extends Resource {
 public static function form(Schema $schema):Schema{return $schema->components(\App\Support\ContentFields::make(static::getModel()));}
 public static function getEloquentQuery():Builder{return parent::getEloquentQuery()->forAdmin(auth()->user());}
 public static function canCreate():bool{return !in_array(class_basename(static::getModel()),['Foundation','School','Page'])&&parent::canCreate();}
 public static function table(Table $table):Table{return $table->columns([TextColumn::make('title')->label('Judul')->searchable()->sortable()->wrap(),TextColumn::make('school.title')->label('Sekolah'),TextColumn::make('status')->badge(),TextColumn::make('published_at')->dateTime()->sortable(),TextColumn::make('updated_at')->since()])->filters([SelectFilter::make('status')->options(['draft'=>'Draft','published'=>'Published','archived'=>'Archived'])])->recordActions([EditAction::make()])->defaultSort('updated_at','desc');}
}
