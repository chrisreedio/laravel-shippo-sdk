<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCarrierAccount
 *
 * Returns an existing carrier account using an object ID.
 */
class GetCarrierAccount extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carrier_accounts/{$this->carrierAccountId}";
	}


	/**
	 * @param string $carrierAccountId Object ID of the carrier account
	 */
	public function __construct(
		protected string $carrierAccountId,
	) {
	}
}
