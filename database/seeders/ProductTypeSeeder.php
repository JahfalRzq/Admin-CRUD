<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_type =[
            ['product_type' => 'Software'],
            ['product_type' => 'Design'],
            ['product_type' => 'Marketing']


        ];
        DB::table('product_types')->insert($product_type);

    }
}
