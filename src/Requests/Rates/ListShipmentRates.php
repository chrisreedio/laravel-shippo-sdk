<?php

namespace ChrisReedIO\ShippoSDK\Requests\Rates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListShipmentRates
 *
 * Returns a paginated list of rates associated with a shipment
 */
class ListShipmentRates extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/shipments/{$this->shipmentId}/rates";
    }

    /**
     * @param  string  $shipmentId  Object ID of the shipment to update
     * @param  null|int  $page  The page number you want to select
     * @param  null|int  $results  The number of results to return per page (max 100)
     */
    public function __construct(
        protected string $shipmentId,
        protected ?int $page = null,
        protected ?int $results = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'results' => $this->results]);
    }
}
