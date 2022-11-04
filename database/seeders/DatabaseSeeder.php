<?php

namespace Database\Seeders;

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
    }
}
