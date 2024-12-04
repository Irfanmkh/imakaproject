<?php

namespace App\Filament\Resources\JenisProjectResource\Pages;

use App\Filament\Resources\JenisProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJenisProject extends EditRecord
{
    protected static string $resource = JenisProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
