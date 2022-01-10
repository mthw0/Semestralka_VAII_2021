<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObjednavkaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $firstname = array( 'Johnathon', 'Anthony', 'Erasmo', 'Raleigh', 'Nancie', 'Tama', 'Camellia', 'Augustine', 'Christeen',
            'Luz', 'Diego', 'Lyndia', 'Thomas', 'Georgianna', 'Leigha', 'Alejandro', 'Marquis', 'Joan', 'Stephania',
            'Elroy', 'Zonia', 'Buffy', 'Sharie', 'Blythe', 'Gaylene', 'Elida', 'Randy', 'Margarete', 'Margarett',
            'Dion', 'Tomi', 'Arden', 'Clora', 'Laine', 'Becki', 'Margherita', 'Bong', 'Jeanice', 'Qiana', 'Lawanda',
            'Rebecka', 'Maribel', 'Tami', 'Yuri', 'Michele', 'Rubi', 'Larisa', 'Lloyd', 'Tyisha', 'Samatha',
        );
        $lastname = array(
            'Mischke', 'Serna', 'Pingree', 'Mcnaught', 'Pepper', 'Schildgen', 'Mongold', 'Wrona', 'Geddes', 'Lanz',
            'Fetzer', 'Schroeder', 'Block', 'Mayoral', 'Fleishman', 'Roberie', 'Latson', 'Lupo', 'Motsinger', 'Drews',
            'Coby', 'Redner', 'Culton', 'Howe', 'Stoval', 'Michaud', 'Mote', 'Menjivar', 'Wiers', 'Paris', 'Grisby',
            'Noren', 'Damron', 'Kazmierczak', 'Haslett', 'Guillemette', 'Buresh', 'Center', 'Kucera', 'Catt', 'Badon',
            'Grumbles', 'Antes', 'Byron', 'Volkman', 'Klemp', 'Pekar', 'Pecora', 'Schewe', 'Ramage',
        );

        for ($x = 0; $x < rand(100,1000); $x++) {
            DB::table('objednavkas')->insert([
                'meno' => $firstname[rand ( 0 , count($firstname) -1)],
                'priezvisko' => $lastname[rand ( 0 , count($firstname) -1)],
                'telCislo' => '0' . rand(100000000, 999999999),
                'rodneCislo' => rand(100000, 999999) . "/" . rand(1000, 9999),
                'poradoveCislo' => $x,
                'miesto' => 'Bratislava',
                'den' => intdiv($x,100)
            ]);
        }
        for ($x = 0; $x < rand(100,1000); $x++) {
            DB::table('objednavkas')->insert([
                'meno' => $firstname[rand ( 0 , count($firstname) -1)],
                'priezvisko' => $lastname[rand ( 0 , count($firstname) -1)],
                'telCislo' => '0' . rand(100000000, 999999999),
                'rodneCislo' => rand(100000, 999999) . "/" . rand(1000, 9999),
                'poradoveCislo' => $x,
                'miesto' => 'Kosice',
                'den' => intdiv($x,100)
            ]);
        }
        for ($x = 0; $x < rand(100,1000); $x++) {
            DB::table('objednavkas')->insert([
                'meno' => $firstname[rand ( 0 , count($firstname) -1)],
                'priezvisko' => $lastname[rand ( 0 , count($firstname) -1)],
                'telCislo' => '0' . rand(100000000, 999999999),
                'rodneCislo' => rand(100000, 999999) . "/" . rand(1000, 9999),
                'poradoveCislo' => $x,
                'miesto' => 'Zilina',
                'den' => intdiv($x,100)
            ]);
        }
        for ($x = 0; $x < rand(100,1000); $x++) {
            DB::table('objednavkas')->insert([
                'meno' => $firstname[rand ( 0 , count($firstname) -1)],
                'priezvisko' => $lastname[rand ( 0 , count($firstname) -1)],
                'telCislo' => '0' . rand(100000000, 999999999),
                'rodneCislo' => rand(100000, 999999) . "/" . rand(1000, 9999),
                'poradoveCislo' => $x,
                'miesto' => 'Bojnice',
                'den' => intdiv($x,80)
            ]);
        }

    }
}
