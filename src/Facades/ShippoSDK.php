<?php

namespace ChrisReedIO\ShippoSDK\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisReedIO\ShippoSDK\ShippoSDK
 */
class ShippoSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \ChrisReedIO\ShippoSDK\ShippoSDK::class;
    }
}
