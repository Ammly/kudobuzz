<?php

use Illuminate\Database\Seeder;

class FeedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $feeds = [
            ['shop_id' => 1, 'product_id' => 1, 'channel_id' => 1],
            ['shop_id' => 2, 'product_id' => 2, 'channel_id' => 2],
            ['shop_id' => 3, 'product_id' => 3, 'channel_id' => 3],
            ['shop_id' => 4, 'product_id' => 4, 'channel_id' => 1],
            ['shop_id' => 5, 'product_id' => 5, 'channel_id' => 2],
        ];

        foreach ($feeds as $feed) {
            \App\Feed::create($feed);
        }
    }
}
