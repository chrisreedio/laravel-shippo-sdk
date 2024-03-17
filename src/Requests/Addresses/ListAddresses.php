<?php

namespace ChrisReedIO\ShippoSDK\Requests\Addresses;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListAddresses
 *
 * Returns a list of all address objects that have been created in this account.
 */
class ListAddresses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/addresses";
	}


	/**
	 * @param null|int $page The page number you want to select
	 * @param null|int $results The number of results to return per page (max 100)
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $results = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'results' => $this->results]);
	}
}
