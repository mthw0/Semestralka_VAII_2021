<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        MiestoSeeder::class,
        UserSeeder::class,
        ObjednavkaSeeder::class,
        PostSeeder::class,
        KomentSeeder::class
        ]);
    }
}
