<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BestellungSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bestellung')->insert([
            'user_id_bestellung' => '1',
            'produkt_id_bestellung' => '1',
            'menge_bestellung' => '3',
            'gewicht_bestellung' => '200',
            'summe_bestellung' =>  '14.40',
            'created_at' => '2021-01-21'
        ]);
    }
}
