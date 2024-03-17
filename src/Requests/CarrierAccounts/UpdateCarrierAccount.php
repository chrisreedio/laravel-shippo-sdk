<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateCarrierAccount
 *
 * Updates an existing carrier account object. The account_id and carrier can't be updated. This is
 * because they form the unique identifier together.
 */
class UpdateCarrierAccount extends Request
{
	protected Method $method = Method::PUT;


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
