<?php

namespace ChrisReedIO\ShippoSDK\Requests\Batches;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetBatch
 *
 * Returns a batch using an object ID. <br> Batch shipments are displayed 100 at a time. You can
 * iterate through each `page` using the `?page= query` parameter. You can also filter based on batch
 * shipment status, for example, by passing a query param like `?object_results=creation_failed`. <br>
 * For more details on filtering results,  see our guide on <a
 * href="https://docs.goshippo.com/docs/api_concepts/filtering/" target="blank"> filtering</a>.
 */
class GetBatch extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/batches/{$this->batchId}";
    }

    /**
     * @param  string  $batchId  Object ID of the batch
     */
    public function __construct(
        protected string $batchId,
    ) {
    }
}
