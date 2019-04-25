<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = ['shop_id', 'product_id', 'channel_id'];

    public function shop()
    {
        return $this->belongsTo(Shop::class)
            ->select(['id', 'store_name']);
    }

    public function product()
    {
        return $this->belongsTo(Product::class)
            ->select(['id', 'name']);
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class)
            ->select(['id', 'name']);
    }
}
