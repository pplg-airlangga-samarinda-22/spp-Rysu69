<?php

namespace App\Filament\Petugas\Resources\KelasResource\Pages;

use App\Filament\Petugas\Resources\KelasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKelas extends ListRecords
{
    protected static string $resource = KelasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
