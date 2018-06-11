<?php

namespace Statamic\Addons\Products;

use Statamic\Extend\Tags;

class ProductsTags extends Tags
{
    public function all()
    {
        return $this->parseLoop(
            Product::all()
        );
    }

    public function find()
    {
        return $this->parse(
            Product::where('slug', $this->context['product'])->first()->toArray()
        );
    }
}
