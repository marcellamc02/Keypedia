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
            // 87 Keyboard
            [
                'categories_id' => '1',
                'name' => 'Mechanical Set Keycap',
                'description' => 'New brand from PBT Keycap with Japanese style, 360 x 130mm',
                'imgPath' => 'assets/87KeyBoard-img.jpg',
                'price' => 800000
            ],
            [
                'categories_id' => '1',
                'name' => 'Mechanical Flower MechZone',
                'description' => 'New style with 110 keys Plum Blossom Keycap Set, 360 x 130mm',
                'imgPath' => 'assets/87KeyBoard-img(2).jpg',
                'price' => 500000
            ],
            [
                'categories_id' => '1',
                'name' => 'Mechanical Keycap RGB',
                'description' => 'Suspended Keycaps with RGB Backlit, 360 x 130mm',
                'imgPath' => 'assets/87KeyBoard-img(3).jpg',
                'price' => 400000
            ],
            [
                'categories_id' => '1',
                'name' => 'Mechanical BAJEAL K100',
                'description' => 'Rainbow style keyboard with 87 keys, blue backlight, and gaming design, 300 x 130mm',
                'imgPath' => 'assets/87KeyBoard-img(4).jpg',
                'price' => 70000
            ],
            // 61 Keyboard
            [
                'categories_id' => '2',
                'name' => 'Mechanical Anne Pro 2',
                'description' => '61 keys with 60% NKRO Bluetooth and TYPE-C RGB Gaming Keyboard',
                'imgPath' => 'assets/61KeyBoard-img.jpg',
                'price' => 1200000
            ],
            [
                'categories_id' => '2',
                'name' => 'Mechanical Grey Set Profile Keycap',
                'description' => 'ANSI Keycaps with 60% real mechanical keyboard and grey color',
                'imgPath' => 'assets/61KeyBoard-img(2).jpg',
                'price' => 200000
            ],
            [
                'categories_id' => '2',
                'name' => 'Mechanical Royal Kludge RK61',
                'description' => 'Gold Mechanical Keyboard with bluetooth wired dual mode and backlit',
                'imgPath' => 'assets/61KeyBoard-img(3).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '2',
                'name' => 'Mechanical Matcha Keycap Set',
                'description' => '61 keys with keycap set XDA PBT Japanese and Korean style',
                'imgPath' => 'assets/61KeyBoard-img(4).jpg',
                'price' => 750000
            ],
            // XDA Profile
            [
                'categories_id' => '3',
                'name' => 'Mechanical Black and White Keycap',
                'description' => 'XDA Sublimate PBT with 119 black keys and Japanese style',
                'imgPath' => 'assets/XDAprofile-img.jpg',
                'price' => 650000
            ],
            [
                'categories_id' => '3',
                'name' => 'Mechanical Gamakay LK67',
                'description' => '67 keys RGB Gateron Switch Hot Swappable and custom mode',
                'imgPath' => 'assets/XDAprofile-img(2).jpg',
                'price' => 1200000
            ],
            [
                'categories_id' => '3',
                'name' => 'Mechanical Gamakay TK68',
                'description' => '68 keys RGB style with 2.4G Nircable and ASA/XDA Profile',
                'imgPath' => 'assets/XDAprofile-img(3).jpg',
                'price' => 1200000
            ],
            [
                'categories_id' => '3',
                'name' => 'Mechanical Blue Keycap Set',
                'description' => '132 keys with XDA Profile and PBT Sublimate',
                'imgPath' => 'assets/61KeyBoard-img(4).jpg',
                'price' => 750000
            ],
            // Cherry Profile
            [
                'categories_id' => '4',
                'name' => 'Mechanical AKKO Neon Keycap Set',
                'description' => '157 keys neon keycap set cherry profile from PBT Dua Warna Molding',
                'imgPath' => 'assets/cherryprofileKeyBoard-img.jpg',
                'price' => 850000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Darkgreen Keycap Set',
                'description' => '140 keys from Cherry Profile PBT Custom with Darkgreen color',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(2).jpg',
                'price' => 750000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical AKKO Keycaps Set',
                'description' => '177 keys from Cherry Profile PBT Double Shot with grey color',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(3).jpg',
                'price' => 990000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ],
            [
                'categories_id' => '4',
                'name' => 'Mechanical Grey Astronout Keycaps',
                'description' => '140 keys from Cherry Profile PBT Sublimate DIY Keycaps Custom',
                'imgPath' => 'assets/cherryprofileKeyBoard-img(4).jpg',
                'price' => 700000
            ]

        ]);
    }
}
