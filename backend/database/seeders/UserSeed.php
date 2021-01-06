<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'Chris@hotmail.com',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Finn',
            'email' => 'Finn@hotmail.com',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Kevin',
            'email' => 'Kevin@hotmail.com',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Kawthar',
            'email' => 'Kawthar@hotmail.com',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Jan',
            'email' => 'Jan@hotmail.com',
            'password' => Hash::make('1234')
        ]);
        DB::table('users')->insert([
            'name' => 'Aaron',
            'email' => 'Aaron@hotmail.com',
            'password' => Hash::make('1234')
        ]);
    }
}
