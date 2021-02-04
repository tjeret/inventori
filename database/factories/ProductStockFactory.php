<?php

namespace Database\Factories;

use App\Models\ProductStock;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductStockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductStock::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_product' => $this->faker->randomDigit(),
            'id_price_list' => $this->faker->randomDigit(),
            'debit' => $this->faker->numberBetween($min = 10, $max = 100),
            'credit' => $this->faker->numberBetween($min = 10, $max = 100)
        ];
    }
}
