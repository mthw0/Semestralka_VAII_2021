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
                'popis' => 'Ockovacie miesto v Bratislavskej nemocnici',
                'obrazok'=> 'null',
                'dennaKapacita'=>'90'
            ],
            [
                'nazov' => 'Kosice',
                'adresa' => 'Hlavná 2',
                'popis' => 'Ockovacie miesto v Košickej nemocnici',
                'obrazok'=> 'null',
                'dennaKapacita'=>'100'
            ],
            [
                'nazov' => 'Zilina',
                'adresa' => 'Vojtecha Spanyola 43',
                'popis' => 'Ockovacie miesto pri Žilinskej nemocnici',
                'obrazok'=> 'null',
                'dennaKapacita'=>'110'
            ],
            [
                'nazov' => 'Bojnice',
                'adresa' => 'Nemocnicna 5',
                'popis' => 'Ockovacie miesto pri Bojnickej nemocnici',
                'obrazok'=> 'null',
                'dennaKapacita'=>'80'
            ]
        ];
        DB::table('ockovacie_miestos')->insert($data);
    }
}
