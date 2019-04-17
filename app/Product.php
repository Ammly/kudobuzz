<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['shop_id', 'name', 'title', 'brand', 'sales_price', 'description', 'quantity'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

}
