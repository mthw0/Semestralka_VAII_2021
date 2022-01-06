<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Viac ako 1 800 lekárov vyzvalo verejnosť k očkovaniu',
            'content' => 'Viac ako 1800 zdravotníkov z nemocníc sa postavilo za verejnú výzvu obyvateľom krajiny na podporu očkovania proti ochoreniu COVID-19. V liste verejnosti zdôrazňujú, že do nemocníc sa dostávajú čoraz mladší pacienti a nemocnice musia pristupovať k obmedzovaniu takzvanej bielej medicíny. Pripomínajú, že väčšina úmrtí na COVID-19 patrí do skupiny odvrátiteľných úmrtí, keďže sa im očkovaním dalo zabrániť.',
            'category' => 'Info',
            'slug' => 'Viac-ako-1800-lekarov-vyzvalo-verejnost-k-ockovaniu'
        ]);
    }
}
