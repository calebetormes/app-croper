<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosClassesSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produtos_classes')->insert([
            ['nome' => 'BIO'],
            ['nome' => 'ESP'],
            ['nome' => 'F'],
            ['nome' => 'H'],
            ['nome' => 'I'],
            ['nome' => 'OL'],
            ['nome' => 'POL'],
        ]);
    }
}
