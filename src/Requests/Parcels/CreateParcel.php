<?php

namespace ChrisReedIO\ShippoSDK\Requests\Parcels;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateParcel
 *
 * Creates a new parcel object.
 */
class CreateParcel extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/parcels";
	}


	public function __construct()
	{
	}
}
