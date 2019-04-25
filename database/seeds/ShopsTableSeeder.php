<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shops = [

            ['id' =>1, 'store_name' => 'Shop One', 'store_url' => 'http://shop.com', 'currency' => 'KES'],
            ['id' =>2, 'store_name' => 'Shop Two', 'store_url' => 'http://shop.com', 'currency' => 'KES'],
            ['id' =>3, 'store_name' => 'Shop Three', 'store_url' => 'http://shop.com', 'currency' => 'KES'],
            ['id' =>4, 'store_name' => 'Shop Four', 'store_url' => 'http://shop.com', 'currency' => 'KES'],
            ['id' =>5, 'store_name' => 'Shop Five', 'store_url' => 'http://shop.com', 'currency' => 'KES'],
        ];

        foreach ($shops as $shop) {
            \App\Shop::create($shop);
        }
    }
}
