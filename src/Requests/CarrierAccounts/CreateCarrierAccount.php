<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCarrierAccount
 *
 * Creates a new carrier account or connects an existing carrier account to the Shippo account.
 */
class CreateCarrierAccount extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/carrier_accounts';
    }

    public function __construct()
    {
    }
}
