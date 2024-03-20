<?php

namespace ChrisReedIO\ShippoSDK\Requests\ServiceGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateServiceGroup
 *
 * Updates an existing service group object. <br>The object_id cannot be updated as it is the unique
 * identifier for the object.
 */
class UpdateServiceGroup extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return '/service-groups';
    }

    public function __construct()
    {
    }
}
