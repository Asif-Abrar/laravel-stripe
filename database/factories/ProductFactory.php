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
            'name' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 100,  1000),
            'image' => $this->faker->imageUrl,
        ];
    }
}
