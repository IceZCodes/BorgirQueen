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

        User::create([
            'name' => 'Felix Hernandez',
            'email' => 'felixhernandez@gmail.com',
            'password' => bcrypt('felix123'),
            'address'=> 'Jl Raya Kb. Jeruk No.27',
            'phone' => '+6287771346521',
        ]);

        User::create([
            'name' => 'Bianca Tamara',
            'email' => 'biancatamara@gmail.com',
            'password' => bcrypt('bianca123'),
            'address'=> 'Jl Mawadah No.20',
            'phone' => '+6281277899112',
        ]);

        User::create([
            'name' => 'Alexandra Chung',
            'email' => 'alexandrachung@gmail.com',
            'password' => bcrypt('alex123'),
            'address'=> 'Jl Raya Ragunan No.12',
            'phone' => '+6287771168253',
        ]);

        User::create([
            'name' => 'Stevanus Hartono',
            'email' => 'stevanushartono@gmail.com',
            'password' => bcrypt('stevan123'),
            'address'=> 'Jl Kedoya Raya No.4',
            'phone' => '+6281249827152',
        ]);

        User::create([
            'name' => 'Ryan Higa',
            'email' => 'ryanhiga@gmail.com',
            'password' => bcrypt('ryan123'),
            'address'=> 'Jl Fatmawati No.10',
            'phone' => '+6287773213456',
        ]);

        Category::create([
            'name' => 'Food',
            'slug' => '',
        ]);

        FoodFactory::times(100)->create();
    }
}
