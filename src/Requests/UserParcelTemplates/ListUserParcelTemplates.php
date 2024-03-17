<?php

namespace ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListUserParcelTemplates
 *
 * Returns a list all of all user parcel template objects.
 */
class ListUserParcelTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/user-parcel-templates";
	}


	public function __construct()
	{
	}
}
