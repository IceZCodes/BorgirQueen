<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence(2);
        return [
            'name' => $name,
            'category_id' => random_int(1, 3),
            'description' => $this->faker->paragraph(3),
            'image' => 'cheeseBurger.jpg',
            'price' => $this->faker->randomFloat(2, 10000, 50000),
        ];
    }
}
