<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Rates\GetRate;
use ChrisReedIO\ShippoSDK\Requests\Rates\ListShipmentRates;
use ChrisReedIO\ShippoSDK\Requests\Rates\ListShipmentRatesByCurrencyCode;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Rates extends Resource
{
    /**
     * @param  string  $rateId  Object ID of the rate
     */
    public function getRate(string $rateId): Response
    {
        return $this->connector->send(new GetRate($rateId));
    }

    /**
     * @param  string  $shipmentId  Object ID of the shipment to update
     * @param  int  $page  The page number you want to select
     * @param  int  $results  The number of results to return per page (max 100)
     */
    public function listShipmentRates(string $shipmentId, ?int $page, ?int $results): Response
    {
        return $this->connector->send(new ListShipmentRates($shipmentId, $page, $results));
    }

    /**
     * @param  string  $shipmentId  Object ID of the shipment to update
     * @param  string  $currencyCode  ISO currency code for the rates
     * @param  int  $page  The page number you want to select
     * @param  int  $results  The number of results to return per page (max 100)
     */
    public function listShipmentRatesByCurrencyCode(
        string $shipmentId,
        string $currencyCode,
        ?int $page,
        ?int $results,
    ): Response {
        return $this->connector->send(new ListShipmentRatesByCurrencyCode($shipmentId, $currencyCode, $page, $results));
    }
}
