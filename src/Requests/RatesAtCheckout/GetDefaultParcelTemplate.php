<?php

namespace ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetDefaultParcelTemplate
 *
 * Retrieve and display the currently configured default parcel template for live rates.
 */
class GetDefaultParcelTemplate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/live-rates/settings/parcel-template';
    }

    public function __construct()
    {
    }
}
