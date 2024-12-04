<?php

namespace App\Filament\Resources\KategoriProjectResource\Pages;

use App\Filament\Resources\KategoriProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKategoriProject extends EditRecord
{
    protected static string $resource = KategoriProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
