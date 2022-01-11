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
            'category' => 'Laptop',
        ]);
        DB::table('products_category')->insert([
            'category' => 'Smartphone',
        ]);
        DB::table('products_category')->insert([
            'category' => 'Tevelision',
        ]);
        DB::table('products_category')->insert([
            'category' => 'Cooking Gadget',
        ]);
        DB::table('products_category')->insert([
            'category' => 'Accesories',
        ]);
        DB::table('products_category')->insert([
            'category' => 'Tools',
        ]);
    }
}
