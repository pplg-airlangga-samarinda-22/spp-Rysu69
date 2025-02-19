<?php

namespace App\Filament\Petugas\Resources;

use App\Filament\Petugas\Resources\SppResource\Pages;
use App\Filament\Petugas\Resources\SppResource\RelationManagers;
use App\Models\Spp;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SppResource extends Resource
{
    protected static ?string $model = Spp::class;
    protected static ?string $label = 'Spp ';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tahun')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('nominal')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tahun')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nominal')
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
            'index' => Pages\ListSpps::route('/'),
            'create' => Pages\CreateSpp::route('/create'),
            'edit' => Pages\EditSpp::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $user = \Illuminate\Support\Facades\Auth::user();
        return $user && $user->level == 'admin';
    }
}
