<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products_category')->insert([
            'name' => 'Laptop',
        ]);
        DB::table('products_category')->insert([
            'name' => 'Smartphone',
        ]);
        DB::table('products_category')->insert([
            'name' => 'Tevelision',
        ]);
        DB::table('products_category')->insert([
            'name' => 'Cooking Gadget',
        ]);
        DB::table('products_category')->insert([
            'name' => 'Accesories',
        ]);
        DB::table('products_category')->insert([
            'name' => 'Tools',
        ]);
    }
}
