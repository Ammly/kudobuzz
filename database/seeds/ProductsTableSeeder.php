<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
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
                'shop_id' => 1,
                'name' => 'Macbook Pro',
                'title' => 'Macbook Pro 15',
                'brand' => 'Apple',
                'sales_price' => '1000',
                'description' => 'Macbook Pro 15',
                'quantity' => 100,
            ],
            [
                'shop_id' => 2,
                'name' => 'Macbook Pro',
                'title' => 'Macbook Pro 14',
                'brand' => 'Apple',
                'sales_price' => '1000',
                'description' => 'Macbook Pro 14',
                'quantity' => 100,
            ],
            [
                'shop_id' => 3,
                'name' => 'Iphone X',
                'title' => 'Iphone X',
                'brand' => 'Apple',
                'sales_price' => '1000',
                'description' => 'Iphone X',
                'quantity' => 100,
            ],
            [
                'shop_id' => 4,
                'name' => 'Iphone XL',
                'title' => 'Iphone XL',
                'brand' => 'Apple',
                'sales_price' => '1000',
                'description' => 'Iphone XL',
                'quantity' => 100,
            ],
            [
                'shop_id' => 5,
                'name' => 'Iphone 8',
                'title' => 'Iphone 8',
                'brand' => 'Apple',
                'sales_price' => '1000',
                'description' => 'Iphone 8',
                'quantity' => 100,
            ],
        ];

        foreach ($products as $product) {
            \App\Product::create($product);
        }
    }
}
