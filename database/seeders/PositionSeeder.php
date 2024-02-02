<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $position = [
            ['position_name'   => 'Sales Lead','division_id' => '1',],
            ['position_name'   => 'Sales Aquisitiion','division_id' => '1',],
            ['position_name'   => 'Customer Reservation Management','division_id' => '1',],
            ['position_name'   => 'Desain Graphic Multimedia','division_id' => '1',],
            ['position_name'   => 'Design web Multimedia','division_id' => '1',],
            ['position_name'   => 'Content Creator','division_id' => '1',],
            ['position_name'   => 'Social Media Specialist','division_id' => '1',],

            ['position_name'  => 'CEO','division_id' => '2',],
            ['position_name'  => 'Manager Marketing','division_id' => '2',],
            ['position_name'  => 'Manager Evaluasi' ,'division_id' => '2',],
            ['position_name'  => 'Finance','division_id' => '2',],
            ['position_name'  => 'Legal','division_id' => '2',],
            ['position_name'  => 'HR & GA','division_id' => '2',],

            ['position_name'  => 'UI/UX Designer','division_id' => '3',],
            ['position_name'  => 'Front End Developer','division_id' => '3',],
            ['position_name'  => 'Back End Developer' ,'division_id' => '3',],
            ['position_name'  => 'Mobile Developer','division_id' => '3',],
            ['position_name'  => 'Quality Assurance','division_id' => '3',],
            ['position_name'  => 'Machine Learning','division_id' => '3',],
            ['position_name'  => 'DevOps','division_id' => '3',],
            ['position_name'  => 'Project Manager','division_id' => '3',],
            ['position_name'  => 'Bisnis Development','division_id' => '3',],

            ['position_name'  => 'Arsitek','division_id' => '4',],
            ['position_name'  => 'Desain Graphic','division_id' => '4',],






        ];
        DB::table('positions')->insert($position);

    }
}
