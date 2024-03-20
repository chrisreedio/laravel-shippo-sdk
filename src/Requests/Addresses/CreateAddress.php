<?php

namespace ChrisReedIO\ShippoSDK\Requests\Addresses;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateAddress
 *
 * Creates a new address object. You can use address objects to create new shipments, calculate rates,
 * and to create orders.
 */
class CreateAddress extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/addresses';
    }

    public function __construct()
    {
    }
}
