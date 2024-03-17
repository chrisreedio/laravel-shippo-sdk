<?php

namespace ChrisReedIO\ShippoSDK\Requests\Orders;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateOrder
 *
 * Creates a new order object.
 */
class CreateOrder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/orders";
	}


	public function __construct()
	{
	}
}
