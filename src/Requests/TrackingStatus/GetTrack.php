<?php

namespace ChrisReedIO\ShippoSDK\Requests\TrackingStatus;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetTrack
 *
 * Returns the tracking status of a shipment using a carrier name and a tracking number.
 */
class GetTrack extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/tracks/{$this->carrier}/{$this->trackingNumber}";
	}


	/**
	 * @param string $trackingNumber Tracking number
	 * @param string $carrier Name of the carrier
	 */
	public function __construct(
		protected string $trackingNumber,
		protected string $carrier,
	) {
	}
}
