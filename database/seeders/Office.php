<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Office extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $office = [

            ['office_name' => 'Arcawinagun Office','address' => 'Arcawinangun'],
            ['office_name' => 'Mersi Office','address' => 'Mersi']





        ];
        DB::table('offices')->insert($office);

    }
}
