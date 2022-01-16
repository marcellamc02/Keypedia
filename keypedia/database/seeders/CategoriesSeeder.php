<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name'=>'87 Key Board',
                'imgPath'=>'assets/87KeyBoard-img.jpg'
            ],
            [
                'name'=>'61 Key Board',
                'imgPath'=>'assets/61KeyBoard-img.jpg'
            ],
            [
                'name'=>'XDA Profile',
                'imgPath'=>'assets/XDAprofile-img.jpg'
            ],
            [
                'name'=>'Cherry Profile',
                'imgPath'=>'assets/cherryprofileKeyBoard-img.jpg'
            ]
        ]);
    }
}
