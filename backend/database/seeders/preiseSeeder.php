<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class preiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preise')->insert([
            'id' => '1',
            'groesse' => '50g',
            'preis' => '2.65'
        ]);

        DB::table('preise')->insert([
            'id' => '2',
            'groesse' => '100g',
            'preis' => '5.30'
        ]);

        DB::table('preise')->insert([
            'id' => '3',
            'groesse' => '200g',
            'preis' => '10.60'
        ]);

        DB::table('preise')->insert([
            'id' => '4',
            'groesse' => '500g',
            'preis' => '26.50'
        ]);
    }
}
