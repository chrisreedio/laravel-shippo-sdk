<?php

namespace ChrisReedIO\ShippoSDK\Requests\Addresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ValidateAddress
 *
 * Validates an existing address using an object ID
 */
class ValidateAddress extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/addresses/{$this->addressId}/validate";
	}


	/**
	 * @param string $addressId Object ID of the address
	 */
	public function __construct(
		protected string $addressId,
	) {
	}
}
