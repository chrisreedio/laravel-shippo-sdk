<?php

namespace ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateDefaultParcelTemplate
 *
 * Update the currently configured default parcel template for live rates. The object_id in the request
 * payload should identify the user parcel template to be the new default.
 */
class UpdateDefaultParcelTemplate extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/live-rates/settings/parcel-template";
	}


	public function __construct()
	{
	}
}
