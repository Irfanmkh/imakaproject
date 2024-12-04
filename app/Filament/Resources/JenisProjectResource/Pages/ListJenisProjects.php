<?php

namespace App\Filament\Resources\JenisProjectResource\Pages;

use App\Filament\Resources\JenisProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJenisProjects extends ListRecords
{
    protected static string $resource = JenisProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
