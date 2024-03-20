<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierParcelTemplates;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListCarrierParcelTemplates
 *
 * List all carrier parcel template objects. <br> Use the following query string params to filter the
 * results as needed. <br> <ul> <li>`include=all` (the default). Includes templates from all carriers
 * </li> <li>`include=user`. Includes templates only from carriers which the user has added (whether or
 * not they're currently enabled) </li> <li>`include=enabled`. includes templates only for carriers
 * which the user has added and enabled </li> <li>`carrier=*token*`. filter by specific carrier, e.g.
 * fedex, usps </li> </ul>
 */
class ListCarrierParcelTemplates extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/parcel-templates';
    }

    /**
     * @param  null|string  $include  filter by user or enabled
     * @param  null|string  $carrier  filter by specific carrier
     */
    public function __construct(
        protected ?string $include = null,
        protected ?string $carrier = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['include' => $this->include, 'carrier' => $this->carrier]);
    }
}
