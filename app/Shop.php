<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['store_name', 'store_url', 'currency'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function feed()
    {
        return $this->hasMany(Feed::class);
    }

    public function channel()
    {
        return $this->hasMany(Channel::class);
    }
}
