<?php

namespace App\Filament\Resources\PengalamanKerjaResource\Pages;

use App\Filament\Resources\PengalamanKerjaResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePengalamanKerjas extends ManageRecords
{
    protected static string $resource = PengalamanKerjaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
