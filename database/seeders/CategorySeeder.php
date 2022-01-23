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
        DB::table('categories')->delete();

        DB::table('categories')->insert([
            [
                'category_name' => 'House Plants'
            ],
            [
                'category_name' => 'Potter Plants'
            ],
            [
                'category_name' => 'Seeds'
            ],
            [
                'category_name' => 'Small Plants'
            ],
            [
                'category_name' => 'Succulents'
            ],
            [
                'category_name' => 'Trerrariums'
            ],
            [
                'category_name' => 'Gardening'
            ],
            [
                'category_name' => 'Accessories'
            ]
        ]);
    }
}
