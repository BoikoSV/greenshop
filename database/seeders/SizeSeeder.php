<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->delete();

        DB::table('sizes')->insert([
            [
                'size_fullname' => 'Extra Small',
                'size_shortname' => 'XS',
                'sort' => 1
            ],
            [
                'size_fullname' => 'Small',
                'size_shortname' => 'S',
                'sort' => 2
            ],
            [
                'size_fullname' => 'Medium',
                'size_shortname' => 'M',
                'sort' => 3
            ],
            [
                'size_fullname' => 'Large',
                'size_shortname' => 'L',
                'sort' => '4'
            ],
            [
                'size_fullname' => 'Extra Large',
                'size_shortname' => 'XL',
                'sort' => 4
            ],
            [
                'size_fullname' => 'Extra Extra Large',
                'size_shortname' => 'XXL',
                'sort' => 5
            ],
        ]);
    }
}
