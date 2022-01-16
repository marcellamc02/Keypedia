<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeyboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keyboard')->insert([
            [
                'categories_id' => '1',
                'name' => 'mechanical RGB 87',
                'description' => 'brand new gaming keyboard with weight:700g, RGB',
                'imgPath' => 'assets/87KeyBoard-img.jpg',
                'price' => '70'
            ]
        ]);
    }
}
