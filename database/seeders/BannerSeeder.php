<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::table('banners')->delete();
        DB::table('banners')->insert([
            [
                'image_url' => $faker->imageUrl,
                'page_url' => $faker->url,
            ],
            [
                'image_url' => $faker->imageUrl,
                'page_url' => $faker->url,
            ],
            [
                'image_url' => $faker->imageUrl,
                'page_url' => $faker->url,
            ],
        ]);
    }
}
