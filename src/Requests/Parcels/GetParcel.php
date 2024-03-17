<?php

namespace ChrisReedIO\ShippoSDK\Requests\Parcels;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetParcel
 *
 * Returns parcel details using an existing parcel object ID (this will not return parcel details
 * associated with un-purchased shipment/rate parcel object IDs).
 */
class GetParcel extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/parcels/{$this->parcelId}";
	}


	/**
	 * @param string $parcelId Object ID of the parcel
	 */
	public function __construct(
		protected string $parcelId,
	) {
	}
}
