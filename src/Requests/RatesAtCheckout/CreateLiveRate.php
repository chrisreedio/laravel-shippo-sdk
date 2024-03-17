<?php

namespace ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateLiveRate
 *
 * Initiates a live rates request. Include either the object ID for
 * an existing address record or a
 * fully formed address object when entering
 * an address value. You can also enter the object ID of an
 * existing user parcel
 * template or a fully formed user parcel template object as the parcel value.
 */
class CreateLiveRate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/live-rates";
	}


	public function __construct()
	{
	}
}
