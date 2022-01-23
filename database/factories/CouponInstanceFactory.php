<?php

namespace Database\Factories;

use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CouponInstanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        DB::table('coupon_instances')->delete();

        $coupon = Coupon::all()->random(1)->pluck('coupons_sum', 'id')->toArray();

        return [
            'coupon_id' => key($coupon),
            'code' => $this->getCode(),
            'funds_used' => random_int(10, intval($coupon[array_key_first($coupon)])),
        ];
    }

    private function getCode() : string
    {
        $code = '';

        for($i = 0; $i < 10; $i++)
        {
            $code .= $this->faker->randomLetter();
        }

        return $code;
    }

}
