<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'id' => 'PRD001',
            'product_name' => 'Product 1',
            'description' => 'Description for Product 1',
            'retail_price' => 50.00,
            'wholesale_price' => 35.00,
            'origin' => 'US',
            'quantity' => 100,
            'product_image' => 'image1.jpg'
        ]);

        Product::create([
            'id' => 'PRD002',
            'product_name' => 'Product 2',
            'description' => 'Description for Product 2',
            'retail_price' => 75.00,
            'wholesale_price' => 55.00,
            'origin' => 'UK',
            'quantity' => 150,
            'product_image' => 'image2.jpg'
        ]);
    }
}
