<?php

namespace ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteDefaultParcelTemplate
 *
 * Clears the currently configured default parcel template for live rates.
 */
class DeleteDefaultParcelTemplate extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return '/live-rates/settings/parcel-template';
    }

    public function __construct()
    {
    }
}
