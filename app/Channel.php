<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = ['name'];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function feed()
    {
        return $this->hasMany(Feed::class);
    }
}
