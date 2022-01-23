<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::table('sales')->delete();

        DB::table('sales')->insert([
            [
                'sale_image_url' => $faker->imageUrl,
                'sale_size' => 25,
            ],
            [
                'sale_image_url' => $faker->imageUrl,
                'sale_size' => 50,
            ],
            [
                'sale_image_url' => $faker->imageUrl,
                'sale_size' => 75,
            ],
        ]);
    }
}
