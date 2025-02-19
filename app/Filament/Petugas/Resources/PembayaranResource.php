<?php

namespace App\Filament\Petugas\Resources;

use App\Filament\Petugas\Resources\PembayaranResource\Pages;
use App\Filament\Petugas\Resources\PembayaranResource\RelationManagers;
use App\Models\Pembayaran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PembayaranResource extends Resource
{
    protected static ?string $model = Pembayaran::class;
    protected static ?string $label = 'Pembayaran ';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_petugas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nisn')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('tgl_bayar')
                    ->required(),
                Forms\Components\TextInput::make('bulan_dibayar')
                    ->required()
                    ->maxLength(8),
                Forms\Components\TextInput::make('tahun_dibayar')
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('id_spp')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_bayar')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_petugas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_bayar')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bulan_dibayar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun_dibayar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('id_spp')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_bayar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPembayarans::route('/'),
            'create' => Pages\CreatePembayaran::route('/create'),
            'edit' => Pages\EditPembayaran::route('/{record}/edit'),
        ];
    }
}
