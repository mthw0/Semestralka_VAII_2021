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
        DB::table('objednavkas')->insert([
            'meno' => 'Karol',
            'priezvisko'=>'Múdry',
            'telCislo'=>'0904890230',
            'rodneCislo'=>'881220/5784',
            'poradoveCislo'=>'4',
            'miesto'=>'Bratislava',
            'slug'=>'4'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Jana',
            'priezvisko'=>'Múdra',
            'telCislo'=>'0904890230',
            'rodneCislo'=>'781226/5784',
            'poradoveCislo'=>'5',
            'miesto'=>'Bratislava',
            'slug'=>'5'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Karolína',
            'priezvisko'=>'Rýchla',
            'telCislo'=>'0904123230',
            'rodneCislo'=>'981213/1384',
            'poradoveCislo'=>'6',
            'miesto'=>'Kosice',
            'slug'=>'6'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Eva',
            'priezvisko'=>'Rýchla',
            'telCislo'=>'0910890230',
            'rodneCislo'=>'885220/1284',
            'poradoveCislo'=>'7',
            'miesto'=>'Zilina',
            'slug'=>'7'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Juraj',
            'priezvisko'=>'Rýchly',
            'telCislo'=>'0910890230',
            'rodneCislo'=>'885224/1284',
            'poradoveCislo'=>'8',
            'miesto'=>'Zilina',
            'slug'=>'8'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Dominika',
            'priezvisko'=>'Rýchla',
            'telCislo'=>'0910081230',
            'rodneCislo'=>'585220/1284',
            'poradoveCislo'=>'9',
            'miesto'=>'Zilina',
            'slug'=>'9'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Natália',
            'priezvisko'=>'Rýchla',
            'telCislo'=>'0910450230',
            'rodneCislo'=>'895520/1284',
            'poradoveCislo'=>'10',
            'miesto'=>'Zilina',
            'slug'=>'10'
        ]);
    }
}
