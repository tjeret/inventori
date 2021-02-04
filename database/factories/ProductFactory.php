<?php

namespace Database\Factories;

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_type' => $this->faker->randomDigit(),
            'id_user' => $this->faker->randomDigit(),
            'name' => $this->faker->Name(),
            'unit' => $this->faker->randomDigit(),
        ];
    }
}
