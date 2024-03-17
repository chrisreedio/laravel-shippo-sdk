<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCarrierRegistrationStatus
 *
 * Returns the registration status for the given account for the given carrier
 */
class GetCarrierRegistrationStatus extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/carrier_accounts/reg-status";
	}


	/**
	 * @param string $carrier filter by specific carrier
	 */
	public function __construct(
		protected string $carrier,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['carrier' => $this->carrier]);
	}
}
