<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserfakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 15 vendedores
        User::factory()->count(15)->create([
            'role_id' => '4',
        ]);

        // 5 gerentes comerciais
        User::factory()->count(5)->create([
            'role_id' => '3',
        ]);

        // 1 gerente nacional
        User::factory()->create([
            'role_id' => '2',
        ]);
    }
}
