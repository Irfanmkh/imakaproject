<?php

namespace App\Filament\Resources\PostAsResource\Pages;

use App\Filament\Resources\PostAsResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePostAs extends ManageRecords
{
    protected static string $resource = PostAsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
