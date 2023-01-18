<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Factories\FoodFactory;

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

        FoodFactory::times(100)->create();
    }
}
