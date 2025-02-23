<?php

namespace App\Filament\Resources\ModeloResource\Pages;

use App\Filament\Resources\ModeloResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageModelos extends ManageRecords
{
    protected static string $resource = ModeloResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
