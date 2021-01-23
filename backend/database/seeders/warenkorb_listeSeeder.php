<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class warenkorb_listeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warenkorb_liste')->insert([
            'id' => '1',
            'user_id' => '1',
            'produkt_id' => '2',
            'menge' => '1',
            'gewicht_warenkorb' => '50'
        ]);
        DB::table('warenkorb_liste')->insert([
            'id' => '2',
            'user_id' => '1',
            'produkt_id' => '11',
            'menge' => '15',
            'gewicht_warenkorb' => '200'
        ]);
        DB::table('warenkorb_liste')->insert([
            'id' => '3',
            'user_id' => '1',
            'produkt_id' => '17',
            'menge' => '25',
            'gewicht_warenkorb' => '200'
        ]);
        DB::table('warenkorb_liste')->insert([
            'id' => '4',
            'user_id' => '2',
            'produkt_id' => '30',
            'menge' => '5',
            'gewicht_warenkorb' => '100'
        ]);
    }
}
