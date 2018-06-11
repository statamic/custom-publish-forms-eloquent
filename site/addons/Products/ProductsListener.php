<?php

namespace Statamic\Addons\Products;

use Statamic\API\Nav;
use Statamic\Extend\Listener;

class ProductsListener extends Listener
{
    public $events = [
        'cp.nav.created' => 'add'
    ];

    public function add($nav)
    {
        $nav->addTo('content', Nav::item('Products')
            ->route('products.index')
            ->icon('shopping-cart')
        );
    }
}
