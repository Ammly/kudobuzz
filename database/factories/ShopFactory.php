<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'store_name' => $faker->name,
        'store_url' => $faker->url,
        'currency' => 'KES',
    ];
});
