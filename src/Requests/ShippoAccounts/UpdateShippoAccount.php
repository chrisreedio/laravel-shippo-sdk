<?php

namespace ChrisReedIO\ShippoSDK\Requests\ShippoAccounts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * UpdateShippoAccount
 *
 * Updates a Shippo Account object
 */
class UpdateShippoAccount extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/shippo-accounts/{$this->shippoAccountId}";
	}


	/**
	 * @param string $shippoAccountId Object ID of the ShippoAccount
	 */
	public function __construct(
		protected string $shippoAccountId,
	) {
	}
}
