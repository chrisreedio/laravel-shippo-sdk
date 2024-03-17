<?php

namespace ChrisReedIO\ShippoSDK\Requests\Batches;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * CreateBatch
 *
 * Creates a new batch object for purchasing shipping labels for many shipments at once. Batches are
 * created asynchronously. This means that the API response won't include your batch shipments yet. You
 * need to retrieve the batch later to verify that all batch shipments are valid.
 */
class CreateBatch extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/batches";
	}


	public function __construct()
	{
	}
}
