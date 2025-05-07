<?php

namespace App\Filament\Resources\TipoDePesoResource\Pages;

use App\Filament\Resources\TipoDePesoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTipoDePesos extends ManageRecords
{
    protected static string $resource = TipoDePesoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
