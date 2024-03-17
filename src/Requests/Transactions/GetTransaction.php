<?php

namespace ChrisReedIO\ShippoSDK\Requests\Transactions;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetTransaction
 *
 * Returns an existing transaction using an object ID.
 */
class GetTransaction extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/transactions/{$this->transactionId}";
	}


	/**
	 * @param string $transactionId Object ID of the transaction to update
	 */
	public function __construct(
		protected string $transactionId,
	) {
	}
}
