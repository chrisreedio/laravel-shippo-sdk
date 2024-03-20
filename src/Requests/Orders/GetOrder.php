<?php

namespace ChrisReedIO\ShippoSDK\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetOrder
 *
 * Retrieves an existing order using an object ID.
 */
class GetOrder extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/orders/{$this->orderId}";
    }

    /**
     * @param  string  $orderId  Object ID of the order
     */
    public function __construct(
        protected string $orderId,
    ) {
    }
}
