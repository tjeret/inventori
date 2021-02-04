<?php

namespace Database\Factories;

use App\Models\PriceList;
use Illuminate\Database\Eloquent\Factories\Factory;

class PriceListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PriceList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => $this->faker->name(),
            'id_product' => $this->faker->randomDigit(),
            'price_sell' => $this->faker->numberBetween($min = 10000, $max = 100000),
            'price_buy' => $this->faker->numberBetween($min = 10000, $max = 100000),
        ];
    }
}
