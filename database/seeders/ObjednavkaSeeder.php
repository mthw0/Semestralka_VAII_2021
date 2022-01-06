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
            'priezvisko' => 'Hraško',
            'telCislo' => '0910504904',
            'rodneCislo' => '961013/4354',
            'poradoveCislo' => '1',
            'miesto' => 'Bratislava'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Juraj',
            'priezvisko' => 'Novák',
            'telCislo' => '0904340120',
            'rodneCislo' => '880502/8125',
            'poradoveCislo' => '2',
            'miesto' => 'Košice'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Štefan',
            'priezvisko' => 'Múdry',
            'telCislo' => '0904890230',
            'rodneCislo' => '781220/5784',
            'poradoveCislo' => '3',
            'miesto' => 'Bratislava'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Karol',
            'priezvisko' => 'Múdry',
            'telCislo' => '0904890230',
            'rodneCislo' => '881220/5784',
            'poradoveCislo' => '4',
            'miesto' => 'Bratislava'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Jana',
            'priezvisko' => 'Múdra',
            'telCislo' => '0904890230',
            'rodneCislo' => '781226/5786',
            'poradoveCislo' => '5',
            'miesto' => 'Bratislava'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Karolína',
            'priezvisko' => 'Nováková',
            'telCislo' => '0904123230',
            'rodneCislo' => '981213/1387',
            'poradoveCislo' => '6',
            'miesto' => 'Košice'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Eva',
            'priezvisko' => 'Rýchla',
            'telCislo' => '0910890230',
            'rodneCislo' => '885220/1281',
            'poradoveCislo' => '7',
            'miesto' => 'Žilina'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Juraj',
            'priezvisko' => 'Rýchly',
            'telCislo' => '0910890230',
            'rodneCislo' => '885224/1289',
            'poradoveCislo' => '8',
            'miesto' => 'Žilina'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Dominika',
            'priezvisko' => 'Múdra',
            'telCislo' => '0910081230',
            'rodneCislo' => '585220/1282',
            'poradoveCislo' => '9',
            'miesto' => 'Žilina'
        ]);
        DB::table('objednavkas')->insert([
            'meno' => 'Natália',
            'priezvisko' => 'Bystrá',
            'telCislo' => '0910450230',
            'rodneCislo' => '895520/1283',
            'poradoveCislo' => '10',
            'miesto' => 'Žilina'
        ]);
    }
}
