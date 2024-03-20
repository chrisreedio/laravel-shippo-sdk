<?php

namespace ChrisReedIO\ShippoSDK\Requests\Manifests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateManifest
 *
 * Creates a new manifest object.
 */
class CreateManifest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/manifests';
    }

    public function __construct()
    {
    }
}
