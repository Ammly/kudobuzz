<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'shop_id' => 1
        'name' => $faker->name,
        'title' => $faker->name,
        'brand' => $faker->name,
        'sales_price' => $faker->price,
        'description' => $faker->sentence,
        'quantity' => $faker->number,
    ];
});
