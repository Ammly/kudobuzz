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
            ['name' => 'Google'],
            ['name' => 'Amazon'],
            ['name' => 'Shopify'],
        ];

        foreach ($channels as $channel) {
            \App\Channel::create($channel);
        }
    }
}
