<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class RoleSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'role_name' => 'Super Admin'

            ], [
                'role_name' => 'Admin'
            ],[
                'role_name' => 'Staff'
            ],[
                'role_name' => 'User'
            ]

            ];
            DB::table('roles')->insert ($roles);
    }
}
