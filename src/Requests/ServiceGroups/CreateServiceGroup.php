<?php

namespace ChrisReedIO\ShippoSDK\Requests\ServiceGroups;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateServiceGroup
 *
 * Creates a new service group.
 */
class CreateServiceGroup extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/service-groups';
    }

    public function __construct()
    {
    }
}
