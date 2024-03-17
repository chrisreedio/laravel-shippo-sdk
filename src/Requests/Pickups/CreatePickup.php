<?php

namespace ChrisReedIO\ShippoSDK\Requests\Pickups;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreatePickup
 *
 * Creates a pickup object. This request is for a carrier to come to a specified location to take a
 * package for shipping.
 */
class CreatePickup extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/pickups";
	}


	public function __construct()
	{
	}
}
