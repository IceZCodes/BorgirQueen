<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'David Martinez',
            'email' => 'davidmartinez@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => 1,
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => '',
        ]);

        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "You can't go wrong with our cheeseburger, a signature flame-grilled beef patty topped with a simple
            layer of melted American cheese, crinkle cut pickles, yellow mustard, and ketchup on a toasted sesame
            seed bun",
            'image' => 'cheeseBurger.jpg',
            'price' => '10000',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "You can't go wrong with our cheeseburger, a signature flame-grilled beef patty topped with a simple
            layer of melted American cheese, crinkle cut pickles, yellow mustard, and ketchup on a toasted sesame
            seed bun",
            'image' => 'cheeseBurger.jpg',
            'price' => '10000',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "You can't go wrong with our cheeseburger, a signature flame-grilled beef patty topped with a simple
            layer of melted American cheese, crinkle cut pickles, yellow mustard, and ketchup on a toasted sesame
            seed bun",
            'image' => 'cheeseBurger.jpg',
            'price' => '10000',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "You can't go wrong with our cheeseburger, a signature flame-grilled beef patty topped with a simple
            layer of melted American cheese, crinkle cut pickles, yellow mustard, and ketchup on a toasted sesame
            seed bun",
            'image' => 'cheeseBurger.jpg',
            'price' => '10000',
        ]);
    }
}
