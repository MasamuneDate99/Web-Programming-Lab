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
            'name' => 'Synch02',
            'gender' => 'Male',
            'address'=> 'joeMama',
            'email' => 'Syn@gmail.com',
            'password' => Hash::make('Synch02'),
        ]);
        DB::table('users')->insert([
            'name' => 'DateGamink',
            'address' => 'JoeBaba',
            'gender' => 'Male',
            'email' => 'Date@gmail.com',
            'password' => Hash::make('Date123'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'Test123',
            'address' => 'Joe123',
            'gender' => 'Male',
            'email' => 'test@gmail.com',
            'password' => Hash::make('123123'),
            'role' => '123',
        ]);
    }
}
