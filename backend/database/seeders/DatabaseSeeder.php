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
        $this->call([UserSeed::class, produktSeeder::class, warenkorb_listeSeeder::class, warenkorbSeeder::class, preiseSeeder::class, produkt_preiseSeeder::class]);
    }
}
