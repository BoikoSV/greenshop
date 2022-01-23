<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::table('reviews')->delete();

        $users = DB::table('users')->select('id')->get();
        $products = DB::table('products')->select('id')->get();

        $reviews = [];

        foreach ($products as $product){
            $reviews[] = [
                'product_id' => $product->id,
                'stars_count' => rand(1, 5),
                'user_id' => $users->random()->id,
                'review_text' => $faker->sentence(rand(7, 40)),
                'created_at' => $faker->dateTime,
            ];
        }

        DB::table('reviews')->insert($reviews);

    }
}
