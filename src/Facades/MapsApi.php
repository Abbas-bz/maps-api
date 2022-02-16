<?php

namespace Abbas-bz\MapsApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abbas-bz\MapsApi\MapsApi
 */
class MapsApi extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'maps-api';
    }
}
