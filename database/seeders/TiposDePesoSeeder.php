<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposDePesoSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tipos_de_peso')->insert([
            ['tipo_peso' => 'DS'],
            ['tipo_peso' => 'GR'],
            ['tipo_peso' => 'KG'],
            ['tipo_peso' => 'KG/L'],
            ['tipo_peso' => 'L'],
        ]);
    }
}
