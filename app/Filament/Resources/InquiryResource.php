<?php
namespace App\Filament\Resources;
use App\Models\Inquiry;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\{Select,Textarea,TextInput};
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Actions\EditAction;
use Illuminate\Database\Eloquent\Builder;
class InquiryResource extends Resource {
 protected static ?string $model=Inquiry::class;
 protected static ?string $modelLabel='Pesan & Kunjungan';
 protected static ?string $pluralModelLabel='Pesan & Kunjungan';
 public static function getEloquentQuery():Builder {
 $user=auth()->user();return parent::getEloquentQuery()->when($user->role==='foundation_admin',fn($q)=>$q->whereNull('school_id'))->when($user->role==='school_admin',fn($q)=>$q->where('school_id',$user->school_id))->when(!in_array($user->role,['super_admin','foundation_admin','school_admin']),fn($q)=>$q->whereRaw('1=0'));
 }
 public static function form(Schema $schema):Schema{return $schema->components([
 TextInput::make('name')->label('Nama')->disabled()->dehydrated(false),TextInput::make('email')->disabled()->dehydrated(false),TextInput::make('phone')->label('Telepon')->disabled()->dehydrated(false),TextInput::make('visit_date')->label('Tanggal kunjungan')->disabled()->dehydrated(false),Textarea::make('message')->label('Pesan')->rows(8)->disabled()->dehydrated(false)->columnSpanFull(),Select::make('status')->label('Tindak lanjut')->options(['new'=>'Baru','in_progress'=>'Sedang ditangani','resolved'=>'Selesai'])->required()->in(['new','in_progress','resolved'])]);}
 public static function table(Table $table):Table{return $table->columns([TextColumn::make('name')->label('Nama')->searchable(),TextColumn::make('email')->searchable(),TextColumn::make('school.title')->label('Tujuan')->placeholder('Yayasan'),TextColumn::make('type')->label('Jenis'),TextColumn::make('visit_date')->label('Tanggal kunjungan')->date(),TextColumn::make('status')->badge(),TextColumn::make('created_at')->label('Diterima')->dateTime()->sortable()])->filters([SelectFilter::make('status')->options(['new'=>'Baru','in_progress'=>'Sedang ditangani','resolved'=>'Selesai'])])->recordActions([EditAction::make()])->defaultSort('created_at','desc');}
 public static function getPages():array{return ['index'=>InquiryResource\Pages\ListInquiries::route('/')];}
}
