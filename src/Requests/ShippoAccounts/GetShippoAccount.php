<?php

namespace ChrisReedIO\ShippoSDK\Requests\ShippoAccounts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetShippoAccount
 *
 * Returns a Shippo Account using an object ID
 */
class GetShippoAccount extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/shippo-accounts/{$this->shippoAccountId}";
    }

    /**
     * @param  string  $shippoAccountId  Object ID of the ShippoAccount
     */
    public function __construct(
        protected string $shippoAccountId,
    ) {
    }
}
