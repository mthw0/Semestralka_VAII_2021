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
        DB::table('posts')->insert([
            'title' => 'V pátek přibylo 6666 případů covidu, o téměř 1700 více než před týdnem',
            'content' => 'Od začátku epidemie v březnu 2020 se v zemi nakazilo koronavirem přes 2,5 milionu lidí, z toho 36.558 v souvislosti s covidem zemřelo. V první polovině prosince umíralo s nákazou přes 100 lidí denně, v poslední době jsou počty obětí nižší. Za tento týden ministerstvo zatím eviduje 226 úmrtí, za stejnou dobu minulého týdne to bylo 304 úmrtí. Údaje z posledních dní se ale obvykle při dalších aktualizacích zvýší.

V prosinci epidemie zpomalovala, nyní šíření nemoci opět zrychluje. Odborníci tento vývoj po vánočních svátcích předpokládali mimo jiné i kvůli nakažlivější variantě omikron. Ministr zdravotnictví Vlastimil Válek (TOP 09) očekává výrazný nástup vlny omikronu zhruba od 16. ledna a uvádí, že poleví ve druhé polovině února. Vláda chystá úpravy některých protiepidemických opatření. Ministerstvo vnitra má vybrat oblasti kritické infrastruktury nezbytné pro chod státu, kde by mohli chodit do práce i lidé, kteří se dostanou do karantény.

Nejvíce případů covidu na 100.000 obyvatel za poslední týden je aktuálně v Praze, kde je incidenční číslo 667. Ve čtyřech dalších krajích - Libereckém, Středočeském, Zlínském a Ústeckém, je incidenci vyšší než 400. Nejnižší zůstává v Karlovarském kraji, kde činí 251.

Laboratoře v pátek provedly téměř 83.000 testů, před týdnem na silvestra jich bylo zhruba o 40.000 méně. U nejčastějších preventivních testů bylo pozitivních 4,7 procenta odevzdaných vzorků, minulý pátek to bylo 6,2 procenta. V případě epidemiologické indikace, kdy se testují lidé například kvůli kontaktu s nakaženým, pozitivita klesla ze 14 procent na 8,8 procenta a podíl pozitivních u tzv. diagnostické indikace, kdy jsou už testováni lidé vykazující příznaky, se snížil z 24,2 procenta na 18,6 procenta.

Stejně jako přibylo proti minulému pátku provedených testů, zvýšil se i počet aplikovaných dávek vakcíny proti koronaviru. Zdravotníci jich v pátek vykázali 106.809, což je nejvíce od loňského července. Z toho 90.019 lidí si přišlo pro posilující dávku. Ukončenou vakcinaci má v Česku téměř 6,7 milionu lidí.',
            'category' => 'Info',
            'slug' => 'V-pátek-přibylo-6666-případů-covidu-o-téměř-1700-více-než-před-týdnem'
        ]);
    }
}
