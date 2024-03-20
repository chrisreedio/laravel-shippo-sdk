<?php

namespace ChrisReedIO\ShippoSDK\Requests\ServiceGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteServiceGroup
 *
 * Deletes an existing service group using an object ID.
 */
class DeleteServiceGroup extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/service-groups/{$this->serviceGroupId}";
    }

    /**
     * @param  string  $serviceGroupId  Object ID of the service group
     */
    public function __construct(
        protected string $serviceGroupId,
    ) {
    }
}
