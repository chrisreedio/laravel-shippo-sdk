<?php

namespace ChrisReedIO\ShippoSDK\Requests\ServiceGroups;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListServiceGroups
 *
 * Returns a list of service group objects.
 */
class ListServiceGroups extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/service-groups";
	}


	public function __construct()
	{
	}
}
