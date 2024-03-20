<?php

namespace ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateUserParcelTemplate
 *
 * Updates an existing user parcel template.
 */
class UpdateUserParcelTemplate extends Request
{
    protected Method $method = Method::PUT;

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
