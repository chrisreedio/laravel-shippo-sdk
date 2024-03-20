<?php

namespace ChrisReedIO\ShippoSDK\Requests\Batches;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * PurchaseBatch
 *
 * Purchases an existing batch with a status of `VALID`.
 * Once you send a POST request to the purchase
 * endpoint the batch status will change to `PURCHASING`.
 * When all the shipments are purchased, the
 * status will change to `PURCHASED` and you will receive a
 * `batch_purchased` webhook indicating that
 * the batch has been purchased
 */
class PurchaseBatch extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/batches/{$this->batchId}/purchase";
    }

    /**
     * @param  string  $batchId  Object ID of the batch
     */
    public function __construct(
        protected string $batchId,
    ) {
    }
}
