<?php

namespace ChrisReedIO\ShippoSDK\Requests\Refunds;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListRefund
 *
 * Returns a list all refund objects.
 */
class ListRefund extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/refunds";
	}


	public function __construct()
	{
	}
}
