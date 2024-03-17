<?php

namespace ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateUserParcelTemplate
 *
 * Creates a new user parcel template. <br>You can choose to create a
 * parcel template using a preset
 * carrier template as a starting point, or
 * you can create an entirely custom one. To use a preset
 * carrier template,
 * pass in a unique template token from <a href="#tag/Parcel-Templates">this
 * list</a>
 * plus the weight fields (**weight** and **weight_unit**). Otherwise, omit
 * the template field
 * and pass the other fields, for the weight, length, height,
 * and depth, as well as their units."
 */
class CreateUserParcelTemplate extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/user-parcel-templates";
	}


	public function __construct()
	{
	}
}
