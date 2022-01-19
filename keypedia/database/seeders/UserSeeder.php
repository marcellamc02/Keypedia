<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = Hash::make('manager123');
        DB::table('users')->insert([
            'username' => 'Manager',
            'email' => 'manager@manager.com',
            'password' => $password,
            'address' => 'Tempat ini hanya untuk Manager',
            'gender' => 'Female',
            'dob' => '10/10/2001',
            'role_id' => '1'
        ]);
    }
}
