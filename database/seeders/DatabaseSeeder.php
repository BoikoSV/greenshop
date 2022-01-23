<?php

namespace Database\Seeders;

use App\Models\CouponInstance;
use App\Models\Product;
use App\Models\User;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BannerSeeder::class);
        $this->call(CouponSeeder::class);
        CouponInstance::factory()->count(10)->create();
        $this->call(SaleSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(PaymentSeeder::class);
        Product::factory()->count(100)->create();
        $this->call(ProductTagSeeder::class);
        User::factory()->count(50)->create();
        $this->call(SubscribeSeeder::class);
        $this->call(ReviewSeeder::class);
    }
}
