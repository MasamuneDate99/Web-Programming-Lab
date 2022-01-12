<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Valerius Robert',
            'gender' => 'male',
            'address'=> 'Tangerang',
            'email' => 'Syn@gmail.com',
            'password' => Hash::make('Synch02'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Nathaniel Davin',
            'address' => 'Tangerang',
            'gender' => 'male',
            'email' => 'Date@gmail.com',
            'password' => Hash::make('Date123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Orang',
            'address' => 'Alam Sutera',
            'gender' => 'male',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123123'),
        ]);
    }
}
