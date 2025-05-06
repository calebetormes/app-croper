<?php

namespace App\Filament\Resources\VendedorResource\Pages;

use App\Filament\Resources\VendedorResource;
use App\Models\Role;
use Filament\Resources\Pages\CreateRecord;

class CreateVendedor extends CreateRecord
{
    protected static string $resource = VendedorResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['role_id'] = Role::where('name', 'vendedor')->first()->id;

        return $data;
    }

    protected function afterCreate(): void
    {
        $this->record->gerentesRelacionados()->attach(auth()->id());
    }
}
