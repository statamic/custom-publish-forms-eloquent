<?php

namespace Statamic\Addons\Products;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'price',
        'content',
    ];

    protected $appends = [
        'url',
        'formatted_price',
    ];

    public function getUrlAttribute()
    {
        return '/products/' . $this->slug;
    }

    public function getFormattedPriceAttribute()
    {
        return '$' . ($this->price / 100);
    }
}
