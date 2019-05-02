<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = [
            ['id' =>1, 'name' => 'Google'],
            ['id' =>2, 'name' => 'Amazon'],
            ['id' =>3, 'name' => 'Shopify'],
        ];

        foreach ($channels as $channel) {
            \App\Channel::create($channel);
        }
    }
}
