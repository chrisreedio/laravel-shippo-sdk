<?php

namespace ChrisReedIO\ShippoSDK\Requests\Manifests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetManifest
 *
 * Returns an existing manifest using an object ID.
 */
class GetManifest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/manifests/{$this->manifestId}";
    }

    /**
     * @param  string  $manifestId  Object ID of the manifest to update
     */
    public function __construct(
        protected string $manifestId,
    ) {
    }
}
