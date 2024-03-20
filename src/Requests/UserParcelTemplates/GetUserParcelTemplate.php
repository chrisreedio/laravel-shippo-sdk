<?php

namespace ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetUserParcelTemplate
 *
 * Returns the parcel template information for a specific user parcel
 * template, identified by the
 * object ID.
 */
class GetUserParcelTemplate extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/user-parcel-templates/{$this->userParcelTemplateObjectId}";
    }

    /**
     * @param  string  $userParcelTemplateObjectId  Object ID of the user parcel template
     */
    public function __construct(
        protected string $userParcelTemplateObjectId,
    ) {
    }
}
