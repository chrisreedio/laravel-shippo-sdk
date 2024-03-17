<?php

namespace ChrisReedIO\ShippoSDK\Requests\Rates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetRate
 *
 * Returns an existing rate using a rate object ID.
 */
class GetRate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rates/{$this->rateId}";
	}


	/**
	 * @param string $rateId Object ID of the rate
	 */
	public function __construct(
		protected string $rateId,
	) {
	}
}
