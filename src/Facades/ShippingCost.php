<?php

namespace Edwinpeligro85\LaravelShippingCost\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Edwinpeligro85\LaravelShippingCost\Skeleton
 */
class ShippingCost extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Edwinpeligro85\LaravelShippingCost\ShippingCost::class;
    }
}
