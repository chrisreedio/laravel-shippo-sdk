<?php

namespace ChrisReedIO\ShippoSDK\Requests\Shipments;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListShipments
 *
 * Returns a list of all shipment objects.<br><br>
 * In order to filter results, you must use the below
 * path parameters.
 * A maximum date range of 90 days is permitted.
 * Provided dates should be ISO 8601
 * UTC dates (timezone offsets are currently not supported).<br><br>
 *
 * Optional path parameters:<br>
 *
 * `object_created_gt`- object(s) created greater than a provided date time<br>
 *   `object_created_gte`
 * - object(s) created greater than or equal to a provided date time<br>
 *   `object_created_lt` -
 * object(s) created less than a provided date time<br>
 *   `object_created_lte` - object(s) created less
 * than or equal to a provided date time<br>
 *
 *   Date format examples:<br>
 *     `2017-01-01`<br>
 *
 * `2017-01-01T03:30:30` or `2017-01-01T03:30:30.5`<br>
 *     `2017-01-01T03:30:30Z`<br><br>
 *
 *   Example
 * URL:<br>
 *
 * `https://api.goshippo.com/shipments/?object_created_gte=2017-01-01T00:00:30&object_created_lt=2017-04-01T00:00:30`
 */
class ListShipments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/shipments";
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
