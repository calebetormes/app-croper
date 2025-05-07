<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrincipiosAtivosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('principios_ativos')->insert([
            ['nome' => ' AGENTE LIMPANTE '],
            ['nome' => ' BIOATIVADORES '],
            ['nome' => ' BIOATIVADORES  '],
            ['nome' => ' CONDICIONADORES '],
            ['nome' => ' CROP NUTRI  '],
            ['nome' => ' CROPBIO '],
            ['nome' => ' CROPTECH '],
            ['nome' => ' INDUTORES '],
            ['nome' => ' POLÍMEROS '],
            ['nome' => ' PRODUTO ORGÂNICO '],
            ['nome' => ' PROTETORES '],
            ['nome' => ' PÓ SECANTE '],
            ['nome' => ' ÓLEOS DE ALTA PERFORMANCE '],
            ['nome' => '2,4 806 SL'],
            ['nome' => 'ACEFATO 970 SG'],
            ['nome' => 'ACETA 250 +BIFENTRIN 400'],
            ['nome' => 'ACETAMIPRID  125 + BIFENTRINA 125 SL'],
            ['nome' => 'ACETAMIPRID 200 SP'],
            ['nome' => 'ATRAZINA WG'],
            ['nome' => 'AZOXISTROBINA 120 + TEBUCONAZOLE 200'],
            ['nome' => 'AZOXISTROBINA 250'],
            ['nome' => 'BIFENTRINA 400'],
            ['nome' => 'CARFENTRAZONE 400'],
            ['nome' => 'CLETODIN 240'],
            ['nome' => 'CLOMAZONE 360'],
            ['nome' => 'CLOMAZONE 500'],
            ['nome' => 'CLORFENAPIR 240'],
            ['nome' => 'CLORIMURON 250'],
            ['nome' => 'CLORPIRIFÓS 480'],
            ['nome' => 'DIAFENTIUROM 500'],
            ['nome' => 'DIFENOCONAZOLE 250'],
            ['nome' => 'DIFLUBENZURON 480'],
            ['nome' => 'DIQUAT 200'],
            ['nome' => 'ETIPROLE 200'],
            ['nome' => 'FIPRONIL  250  TS'],
            ['nome' => 'FIPRONIL 800'],
            ['nome' => 'FLUAZINAN 500 '],
            ['nome' => 'FLUMIOXAZINA 480'],
            ['nome' => 'FOMESAFEM 250'],
            ['nome' => 'GLIFOSATO 540'],
            ['nome' => 'GLIFOSATO 720 '],
            ['nome' => 'GLUFOSINATO 880 SG'],
            ['nome' => 'HALOXIFOP 120'],
            ['nome' => 'IMAZETAPIR 106  SL'],
            ['nome' => 'IMIDACLOPRID 500 SC'],
            ['nome' => 'IMIDACLOPRID 600 SC'],
            ['nome' => 'IMIDACLOPRID 700'],
            ['nome' => 'ISOXAFLUTOLE 750'],
            ['nome' => 'LAMBCIALOTRIN  250'],
            ['nome' => 'LUFENURON 50'],
            ['nome' => 'MESOTRIONE 480'],
            ['nome' => 'METOMIL 215'],
            ['nome' => 'METSULFURON METÍLICO 600'],
            ['nome' => 'NICOSULFURON 750'],
            ['nome' => 'PIRIPROXIFEN  100 SL'],
            ['nome' => 'PROTIOCONAZOL 240g/L + PICOXISTROBINA 200g/L'],
            ['nome' => 'S-METALACLOR 960'],
            ['nome' => 'TEBUCO 430 + AZOXIS 250'],
            ['nome' => 'TEBUCONAZOLE 430'],
            ['nome' => 'TIAMETOXAN 500'],
            ['nome' => 'TIOFANATO METÍLICO 500'],
        ]);
    }
}
