<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KomentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'body' => 'Prvý'
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '1',
            'body' => 'Druhý'
        ]);
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '1',
            'parent_id' => '1',
            'body' => 'Odpoveď'
        ]);
        DB::table('comments')->insert([
            'user_id' => '2',
            'post_id' => '2',
            'body' => 'Prvý'
        ]);
        DB::table('comments')->insert([
            'user_id' => '1',
            'post_id' => '2',
            'body' => 'Druhý'
        ]);

    }
}
