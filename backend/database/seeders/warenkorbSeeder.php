<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class warenkorbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('warenkorb')->insert([
            'id' => '1',
            'user_id' => '1',
            'warenkorb_liste_id' => '1'
        ]);
        DB::table('warenkorb')->insert([
            'id' => '2',
            'user_id' => '1',
            'warenkorb_liste_id' => '2'
        ]);
        DB::table('warenkorb')->insert([
            'id' => '3',
            'user_id' => '2',
            'warenkorb_liste_id' => '3'
        ]);
    }
}
