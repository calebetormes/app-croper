<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Resources\Pages\Page;

class ViewUser extends Page
{
    // Define qual recurso essa página pertence
    protected static string $resource = UserResource::class;

    // Define qual arquivo Blade será usado para renderizar essa página
    protected static string $view = 'pages.view-user';

    // Propriedade para armazenar o usuário que será exibido
    public User $record;

    // Método executado ao montar a página, recebe o usuário selecionado
    public function mount(User $record): void
    {
        // Atribui o usuário recebido à propriedade $record
        $this->record = $record;
    }

    // Define o título da página dinamicamente
    public function getTitle(): string
    {
        return "Visualizando: {$this->record->name}";
    }
}
