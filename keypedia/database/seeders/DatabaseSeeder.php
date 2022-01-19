<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            CategoriesSeeder::class,
            KeyboardSeeder::class

        ]);
        // \App\Models\User::factory(10)->create();
    }
}
