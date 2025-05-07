<?php

namespace App\Filament\Resources\ProdutosClasseResource\Pages;

use App\Filament\Resources\ProdutosClasseResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageProdutosClasses extends ManageRecords
{
    protected static string $resource = ProdutosClasseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
