<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ObjednavkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objednavkas')->insert([
            'meno' => 'Janko',
            'priezvisko'=>'Hraško',
            'telCislo'=>'0910504904',
            'rodneCislo'=>'961013/4354',
            'poradoveCislo'=>'1',
            'miesto'=>'Bratislava',
            'slug'=>'1'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Juraj',
            'priezvisko'=>'Novák',
            'telCislo'=>'0904340120',
            'rodneCislo'=>'880502/8125',
            'poradoveCislo'=>'2',
            'miesto'=>'Kosice',
            'slug'=>'2'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Štefan',
            'priezvisko'=>'Múdry',
            'telCislo'=>'0904890230',
            'rodneCislo'=>'781220/5784',
            'poradoveCislo'=>'3',
            'miesto'=>'Bratislava',
            'slug'=>'3'
        ]);
    }
}
