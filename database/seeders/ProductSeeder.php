<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'empanadas',
                'reference' => 15,
                'price' => 2000,
               
                'stock'=> 20
            ],
            [
                'name' => 'pasteles',
                'reference' => 20,
                'price' => 1000,
               
                'stock'=> 25
            ],

            [
                'name' => 'jugo',
                'reference' => 2123,
                'price' => 2500,
               
                'stock'=> 40
            ],

            [
                'name' => 'cafe',
                'reference' => 41234,
                'price' => 1000,
               
                'stock'=> 0
            ],
            [
                'name' => 'papas',
                'reference' => 21234,
                'price' => 2500,
             
                'stock'=> 10
            ],

            [
                'name' => 'platanitos',
                'reference' => 212344,
                'price' => 2300,
               
                'stock'=> 15
            ],
        ];

        foreach ($products as $product) {
            $product = Product::create($product)->first();

        }
    }
}
