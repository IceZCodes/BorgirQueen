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

        Category::create([
            'name' => 'Drink',
            'slug' => '',
        ]);

        Category::create([
            'name' => 'Extra',
            'slug' => '',
        ]);

        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
        Food::create([
            'name' => 'The Cheese Burger',
            'category_id' => 1,
            'description' => "The Two Cheese Deluxe 1/3 lb.* double Signature Stackburger has two 100% seasoned real beef patties, topped with perfectly melted Sharp American** and White Cheddar**, tomato, onion, lettuce, pickles, ketchup and mayo on a soft and toasted bun. Are you in the mood to get a little cheesy? Because we are in the mood to compose the cheesiest love song you’ve ever heard about the amazing flavors of the DQ® Two Cheese Deluxe 1/3 lb*. double.",
            'image' => 'cheeseBurger.jpg',
            'price' => '500',
        ]);
    }
}
