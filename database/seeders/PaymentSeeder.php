<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->delete();

        DB::table('payments')->insert([
            [
                'payment_name' => 'Cash on delivery'
            ],
            [
                'payment_name' => 'Credit card'
            ],
        ]);
    }
}
