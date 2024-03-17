<?php

namespace ChrisReedIO\ShippoSDK\Requests\Transactions;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateTransaction
 *
 * Creates a new transaction object and purchases the shipping label using a rate object that has
 * previously been created. <br> OR <br> Creates a new transaction object and purchases the shipping
 * label instantly using shipment details, an existing carrier account, and an existing service level
 * token.
 */
class CreateTransaction extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/transactions";
	}


	public function __construct()
	{
	}
}
