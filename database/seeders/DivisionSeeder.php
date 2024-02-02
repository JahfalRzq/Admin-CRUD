<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $division = [
            ['division_name' =>'Marketing',],

            ['division_name' =>'Coorporate',],

            ['division_name' =>'IT/Valuasi Development',],
            
            ['division_name' => 'Architecture & Design Graphic']

        ];
        DB::table('divisions')->insert($division);
    }
}
