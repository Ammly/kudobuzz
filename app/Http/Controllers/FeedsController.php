<?php

namespace App\Http\Controllers;

use App\Feed;
use Illuminate\Http\Request;

class FeedsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Feed::with(['shop', 'product', 'channel'])->get();
    }

    /**
     * Download feeds csv.
     *
     * @return \Illuminate\Http\Response
     */
    public function download()
    {
        $feeds = Feed::with(['shop', 'product', 'channel'])->get();

        $csvExporter = new \Laracsv\Export();

        return $csvExporter
                ->build($feeds, [
                    'shop.store_name' => 'Shop Name',
                    'product.name' => 'Product Name',
                    'channel.name' => 'Channel Name'
                ])->download('feeds.csv');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'shop_id' => 'required',
             'product_id' => 'required',
             'channel_id' => 'required'
        ]);

        Feed::create([
             'shop_id' => $request->shop_id,
             'product_id' => $request->product_id,
             'channel_id' => $request->channel_id
        ]);

        return response()
             ->json([
                 'status' => 'success',
                 'message' => 'Feed created successfully'
             ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function show(Feed $feed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function edit(Feed $feed)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feed $feed)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feed  $feed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feed $feed)
    {
        //
    }
}
