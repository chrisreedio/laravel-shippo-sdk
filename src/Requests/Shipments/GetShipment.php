<?php

namespace ChrisReedIO\ShippoSDK\Requests\Shipments;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetShipment
 *
 * Returns an existing shipment using an object ID
 */
class GetShipment extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/shipments/{$this->shipmentId}";
    }

    /**
     * @param  string  $shipmentId  Object ID of the shipment to update
     */
    public function __construct(
        protected string $shipmentId,
    ) {
    }
}
