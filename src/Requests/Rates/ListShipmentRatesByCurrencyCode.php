<?php

namespace ChrisReedIO\ShippoSDK\Requests\Rates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListShipmentRatesByCurrencyCode
 *
 * Returns all available shipping rates for a shipment object.
 *
 * When you create a new valid shipment
 * object, Shippo automatically calculates all available rates. Depending on your shipment data, there
 * may be none, one or multiple rates.
 *
 * By default, the calculated rates will return the price in two
 * currencies under the `amount` and `amount_local` keys, respectively. The `amount` key will contain
 * the price of a rate expressed in the currency that is used in the country from where the parcel
 * originates, and the `amount_local` key will contain the price expressed in the currency that is used
 * in the country the parcel is shipped to. You can request rates with prices expressed in a different
 * currency by adding the currency code to the end of the resource URL. The full list of supported
 * currencies along with their codes can be viewed on <a
 * href="http://openexchangerates.org/api/currencies.json">open exchange rates</a>.
 *
 * Note:
 * re-requesting the rates with a different currency code will re-queue the shipment (i.e. set the
 * Shipment's `status` to `QUEUED`) and the converted currency rates will only be available when the
 * Shipment's `status` is set to `SUCCESS`.
 */
class ListShipmentRatesByCurrencyCode extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/shipments/{$this->shipmentId}/rates/{$this->currencyCode}";
    }

    /**
     * @param  string  $shipmentId  Object ID of the shipment to update
     * @param  string  $currencyCode  ISO currency code for the rates
     * @param  null|int  $page  The page number you want to select
     * @param  null|int  $results  The number of results to return per page (max 100)
     */
    public function __construct(
        protected string $shipmentId,
        protected string $currencyCode,
        protected ?int $page = null,
        protected ?int $results = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page, 'results' => $this->results]);
    }
}
