<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        DB::table('tags')->insert([
            [
                'tag_name' => 'Flowers',
            ],
            [
                'tag_name' => 'Azalea',
            ],
            [
                'tag_name' => 'Aloe',
            ],
            [
                'tag_name' => 'Pansies',
            ],
            [
                'tag_name' => 'Aster',
            ],
            [
                'tag_name' => 'African marigold',
            ],
            [
                'tag_name' => 'Begonia',
            ],
            [
                'tag_name' => 'Bouquet',
            ],
        ]);
    }
}
