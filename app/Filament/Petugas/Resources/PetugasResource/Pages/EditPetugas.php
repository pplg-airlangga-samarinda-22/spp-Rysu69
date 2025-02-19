<?php

namespace App\Filament\Petugas\Resources\PetugasResource\Pages;

use App\Filament\Petugas\Resources\PetugasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPetugas extends EditRecord
{
    protected static string $resource = PetugasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
