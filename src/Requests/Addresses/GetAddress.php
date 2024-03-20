<?php

namespace ChrisReedIO\ShippoSDK\Requests\Addresses;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetAddress
 *
 * Returns an existing address using an object ID.
 */
class GetAddress extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/addresses/{$this->addressId}";
    }

    /**
     * @param  string  $addressId  Object ID of the address
     */
    public function __construct(
        protected string $addressId,
    ) {
    }
}
