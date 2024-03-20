<?php

namespace ChrisReedIO\ShippoSDK\Requests\Batches;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * AddShipmentsToBatch
 *
 * Adds batch shipments to an existing batch.
 */
class AddShipmentsToBatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/batches/{$this->batchId}/add_shipments";
    }

    /**
     * @param  string  $batchId  Object ID of the batch
     */
    public function __construct(
        protected string $batchId,
    ) {
    }
}
