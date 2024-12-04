<?php

namespace App\Filament\Resources\SectionResource\Pages;

use Filament\Actions;
use App\Models\section;
use Illuminate\Support\Facades\Storage;
use Filament\Tables\Actions\DeleteAction;
use App\Filament\Resources\SectionResource;
use Filament\Resources\Pages\ManageRecords;

class ManageSections extends ManageRecords
{
    protected static string $resource = SectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            
        ];
    }

}
