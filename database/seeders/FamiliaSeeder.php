<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('familia')->insert([
            ['familia' => 'BRONZE'],
            ['familia' => 'OURO'],
            ['familia' => 'PRATA'],
            ['familia' => 'PRIME'],
        ]);
    }
}
