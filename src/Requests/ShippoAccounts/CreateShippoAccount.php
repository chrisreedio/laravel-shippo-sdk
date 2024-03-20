<?php

namespace ChrisReedIO\ShippoSDK\Requests\ShippoAccounts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateShippoAccount
 *
 * Creates a Shippo Account object
 */
class CreateShippoAccount extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/shippo-accounts';
    }

    public function __construct()
    {
    }
}
