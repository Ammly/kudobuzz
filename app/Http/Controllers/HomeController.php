<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Product;
use App\Channel;
use App\Feed;

class HomeController extends Controller
{
    public function index()
    {

        $shops = Shop::count();
        $products = Product::count();
        $channels = Channel::count();
        $feeds = Feed::count();

        return response()
            ->json([
                'shops' => $shops,
                'products' => $products,
                'channels' => $channels,
                'feeds' => $feeds
            ]);
    }
}
