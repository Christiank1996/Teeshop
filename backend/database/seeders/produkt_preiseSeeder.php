<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkt_preiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('p')->insert([
            'produkt_id' => '1',
            'preise_id' => '1'
        ]);

        DB::table('p')->insert([
            'produkt_id' => '1',
            'preise_id' => '1'
        ]);
    }
}
