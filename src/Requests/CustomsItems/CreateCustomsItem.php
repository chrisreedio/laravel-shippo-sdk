<?php

namespace ChrisReedIO\ShippoSDK\Requests\CustomsItems;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCustomsItem
 *
 * Creates a new customs item object.
 */
class CreateCustomsItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customs/items";
	}


	public function __construct()
	{
	}
}
