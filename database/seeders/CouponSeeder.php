<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::table('coupons')->delete();

        DB::table('coupons')->insert([
            [
                'coupons_sum' => 50,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ],
            [
                'coupons_sum' => 100,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ],
            [
                'coupons_sum' => 150,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ],
            [
                'coupons_sum' => 200,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ],
            [
                'coupons_sum' => 500,
                'created_at' => $faker->date,
                'updated_at' => $faker->date
            ]
        ]);
    }
}
