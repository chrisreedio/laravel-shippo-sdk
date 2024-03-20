<?php

namespace ChrisReedIO\ShippoSDK\Requests\Refunds;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateRefund
 *
 * Creates a new refund object.
 */
class CreateRefund extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/refunds';
    }

    public function __construct()
    {
    }
}
