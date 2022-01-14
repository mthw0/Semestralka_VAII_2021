<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MiestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nazov' => 'Bratislava',
                'adresa' => 'Nemocničná 4',
                'popis' => 'Očkovacie miesto v Bratislavskej nemocnici',
                'obrazok' => 'null',
                'dennaKapacita' => '100'
            ],
            [
                'nazov' => 'Kosice',
                'adresa' => 'Hlavná 2',
                'popis' => 'Očkovacie miesto v Košickej nemocnici',
                'obrazok' => 'null',
                'dennaKapacita' => '80'
            ],
            [
                'nazov' => 'Zilina',
                'adresa' => 'Vojtecha Spanyola 43',
                'popis' => 'Očkovacie miesto pri Žilinskej nemocnici',
                'obrazok' => 'null',
                'dennaKapacita' => '70'
            ],
            [
                'nazov' => 'Bojnice',
                'adresa' => 'Nemocničná 1',
                'popis' => 'Očkovacie miesto pri Bojnickej nemocnici',
                'obrazok' => 'null',
                'dennaKapacita' => '50'
            ]
        ];
        DB::table('ockovacie_miestos')->insert($data);
    }
}
