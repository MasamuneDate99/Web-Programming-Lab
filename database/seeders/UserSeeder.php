<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
            'name' => 'Synch02',
            'gender' => 'Male',
            'email' => 'Syn@gmail.com',
            'password' => 'Synch02',
        ]);
        DB::table('users')->insert([
            'name' => 'Date123',
            'gender' => 'Male',
            'email' => 'Date@gmail.com',
            'password' => 'Date123',
            'role' => 'admin',
        ]);
    }
}
