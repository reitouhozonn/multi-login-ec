<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'information' => $this->faker->realText(100),
            'price' => $this->faker->numberBetween(1, 1000),
            'is_selling' => $this->faker->numberBetween(0, 1),
            'sort_order' => $this->faker->randomNumber(1, 10),
            'shop_id' => $this->faker->numberBetween(1, 2),
            'secondary_category_id' => $this->faker->numberBetween(1, 5),
            'image1' => $this->faker->numberBetween(1, 5),
            'image2' => $this->faker->numberBetween(1, 5),
            'image3' => $this->faker->numberBetween(1, 5),
            'image4' => $this->faker->numberBetween(1, 5),
        ];
    }
}
