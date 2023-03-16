<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                'title' => 'Kurtka Nike',
                'description' => 'Nike sport style, very comfortable and high quality',
                'price' => '25000',
                'img' => '/someurl',
                'category_id' => '2',
            ],
            [
                'title' => 'Kurtka Nike',
                'description' => 'Nike sport style, very comfortable and high quality',
                'price' => '25000',
                'img' => '/someurl',
                'category_id' => '2',
            ],
            [
                'title' => 'Kurtka Nike',
                'description' => 'Nike sport style, very comfortable and high quality',
                'price' => '25000',
                'img' => '/someurl',
                'category_id' => '2',
            ],
        );
    }
}
