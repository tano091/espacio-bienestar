<?php

namespace App\Filament\Resources\ComputadoraResource\Pages;

use App\Filament\Resources\ComputadoraResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageComputadoras extends ManageRecords
{
    protected static string $resource = ComputadoraResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
