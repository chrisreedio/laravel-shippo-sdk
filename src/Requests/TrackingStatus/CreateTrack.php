<?php

namespace ChrisReedIO\ShippoSDK\Requests\TrackingStatus;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateTrack
 *
 * Registers a webhook that will send HTTP notifications to you when the status of your tracked package
 * changes. For more details on creating a webhook, see our guides on <a
 * href="https://docs.goshippo.com/docs/tracking/webhooks/">Webhooks</a> and <a
 * href="https://docs.goshippo.com/docs/tracking/tracking/">Tracking</a>.
 */
class CreateTrack extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/tracks';
    }

    public function __construct()
    {
    }
}
