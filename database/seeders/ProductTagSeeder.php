<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_tag')->delete();

        $productIds = DB::table('products')->select('id')->get();
        $tagIds = DB::table('tags')->select('id')->get();

        $relatives = [];
        for($i = 0; $i < $productIds->count() * 3; $i++){
            $relatives[] = [
                'product_id' => $productIds->random()->id,
                'tag_id' => $tagIds->random()->id,
            ];
        }

        DB::table('product_tag')->insert($relatives);

    }
}
