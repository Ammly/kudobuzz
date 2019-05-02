<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1', 'as' => 'api.'], function ()
{
    Route::apiResource('home', 'HomeController');
    Route::apiResource('shops', 'ShopsController');
    Route::apiResource('products', 'ProductsController');
    Route::get('feeds/download', 'FeedsController@download');
    Route::apiResource('feeds', 'FeedsController');
    Route::apiResource('channels', 'ChannelsController');
});
