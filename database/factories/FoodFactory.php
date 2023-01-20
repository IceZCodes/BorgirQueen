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
        $category = random_int(1, 3);
        //Category == 1 -> Food
        //Category == 2 -> Drink
        //Category == 3 -> Extra
        if ($category == 1) {
            $image = 'placeholder1.jpg';
        } else if ($category == 2) {
            $image = 'placeholder2.png';
        } else {
            $image = 'placeholder3.png';
        }
        return [
            'name' => $name,
            'category_id' => $category,
            'description' => $this->faker->paragraph(3),
            'image' => $image,
            'price' => $this->faker->randomFloat(2, 0, 20),
        ];
    }
}
