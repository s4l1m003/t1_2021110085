<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 'PROD001',
                'product_name' => 'Produk A',
                'description' => 'Deskripsi produk A',
                'retail_price' => 100000,
                'wholesale_price' => 80000,
                'origin' => 'ID',
                'quantity' => 50,
                'product_image' => 'image_a.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 'PROD002',
                'product_name' => 'Produk B',
                'description' => 'Deskripsi produk B',
                'retail_price' => 150000,
                'wholesale_price' => 120000,
                'origin' => 'ID',
                'quantity' => 70,
                'product_image' => 'image_b.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
