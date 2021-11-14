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
    }
}
