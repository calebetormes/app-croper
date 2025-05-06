<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    // Cria um usuário administrador padrão.
    public function run(): void
    {

        // Busca ou cria a role 'Admin'
        $adminRole = Role::firstOrCreate(['name' => 'Admin']);

        // Cria o usuário somente se ainda não existir
        User::firstOrCreate(
            ['email' => 'admin@barter.com'],
            [
                'name' => 'Administrador do Sistema',
                'password' => Hash::make('barter'), // ou 'bcrypt()'
                'role_id' => $adminRole->id,
                'email_verified_at' => now(),
            ]
        );
    }
}
