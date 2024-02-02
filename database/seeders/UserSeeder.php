<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    //super admin,admin,staff,user
    public function run()
    {
        // User::factory(10)->create();
        $users = [
            [

                'user_name' => 'Aptzy',
                'email' => 'SuperAdmin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone'    => '0895601111',
                'division_id' => 3,
                'office_id'=> 1,
                'role_id'     => 1,
                'position_id' => 2,
                'image' => 'users\icon-profile.png',

            ],
            [
                'user_name' => 'Fieltzy',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'phone'    => '0895602222',
                'division_id' => 3,
                'office_id'   => 2,
                'role_id'     => 2,
                'position_id' => 2,
                'image' => 'users\icon-profile.png',
            ],
            [
                'user_name' => 'Aciltzy',
                'email' => 'staf@gmail.com',
                'password' => Hash::make('staf123'),
                'phone'    => '0895603333',
                'division' => 3,
                'office_id'   => 1,
                'role_id'     => 3,
                'position_id' => 2,
                'image' => 'users\icon-profile.png',
            ],
            [
                'user_name'=> 'Vyntzy',
                'email'    => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'phone'    => '0895604444',
                'division_id' => 3 ,
                'office_id'=> 1,
                'role_id'     => 4,
                'position_id' => 2,
                'image' => 'users\icon-profile.png',
            ],
        ];
        DB::table('users')->insert($users);
    }
}
