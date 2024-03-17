<?php

namespace ChrisReedIO\ShippoSDK\Requests\CustomsDeclarations;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateCustomsDeclaration
 *
 * Creates a new customs declaration object
 */
class CreateCustomsDeclaration extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/customs/declarations";
	}


	public function __construct()
	{
	}
}
