<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * RegisterCarrierAccount
 *
 * Adds a Shippo master carrier account
 */
class RegisterCarrierAccount extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/carrier_accounts/register/new';
    }

    public function __construct()
    {
    }
}
