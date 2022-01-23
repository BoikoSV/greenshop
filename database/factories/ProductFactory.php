<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        DB::table('products')->delete();
        $categories = DB::table('categories')->select('id')->get();
        $sales = DB::table('sales')->select('id')->get();

        return [
            'category_id' => $categories->random()->id,
            'sale_id' => Arr::random([$sales->random()->id, null]),
            'product_name' => ucfirst($this->faker->words(Arr::random([2, 4]), true)),
            'short_desc' => Arr::random([$this->faker->text(250), null]),
            'description' => $this->faker->sentences(10, true),
            'price' => $this->getPrice(),
            'count' => rand(0, 100),
            'sku' => $this->getSku(),
            'image_url' => $this->faker->imageUrl,
        ];
    }

    public function getPrice() : float
    {
        return rand(10, 100) . '0.00';
    }

    public function getSku() : string
    {
        return $this->faker->randomLetter() . rand(10000, 99999);
    }
}
