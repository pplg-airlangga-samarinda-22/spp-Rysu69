<?php

namespace App\Filament\Petugas\Resources\PetugasResource\Pages;

use App\Filament\Petugas\Resources\PetugasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPetugas extends ListRecords
{
    protected static string $resource = PetugasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
