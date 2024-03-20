<?php

namespace ChrisReedIO\ShippoSDK\Requests\Refunds;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRefund
 *
 * Returns an existing rate using a rate object ID.
 */
class GetRefund extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/refunds/{$this->refundId}";
    }

    /**
     * @param  string  $refundId  Object ID of the refund to update
     */
    public function __construct(
        protected string $refundId,
    ) {
    }
}
