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
                'dennaKapacita' => '100'
            ],
            [
                'nazov' => 'Kosice',
                'adresa' => 'Hlavná 2',
                'popis' => 'Očkovacie miesto v Košickej nemocnici',
                'dennaKapacita' => '80'
            ],
            [
                'nazov' => 'Zilina',
                'adresa' => 'Vojtecha Spanyola 43',
                'popis' => 'Očkovacie miesto pri Žilinskej nemocnici',
                'dennaKapacita' => '70'
            ],
            [
                'nazov' => 'Bojnice',
                'adresa' => 'Nemocničná 1',
                'popis' => 'Očkovacie miesto pri Bojnickej nemocnici',
                'dennaKapacita' => '50'
            ]
        ];
        DB::table('ockovacie_miestos')->insert($data);
    }
}
