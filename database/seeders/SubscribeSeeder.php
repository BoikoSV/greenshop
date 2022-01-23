<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscribeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        DB::table('subscribers')->delete();

        $subscribers = [];
        for($i = 0; $i < 10; $i++){
            $subscribers[] = ['email' => $faker->unique->email()];
        }
        DB::table('subscribers')->insert($subscribers);
    }
}
