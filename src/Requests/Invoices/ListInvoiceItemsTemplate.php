<?php

namespace ChrisReedIO\ShippoSDK\Requests\Invoices;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListInvoiceItemsTemplate
 *
 * <b> Endpoint is in beta and API contract is subject to change. </b> <br><br>
 * Retrieves a collection
 * of invoice items that belong to the authenticated user.
 * Invoice object ID and object owner object
 * ID can be used to filter the result set.
 * The results are paginated. Please see <a
 * href="https://docs.goshippo.com/docs/api_concepts/filtering/" target="blank"> filtering
 * documentation</a> for more information
 * on date filtering and pagination.
 */
class ListInvoiceItemsTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/invoice-items";
	}


	/**
	 * @param null|string $invoiceObjectId The invoice object ID identifier of the Invoice whose Invoice Items you want to select.
	 * @param null|string $invoiceNumber The invoice number identifier of the Invoice whose Invoice Items you want to select.
	 * @param null|string $shippoAccountId Account identifier for the owner of the Invoice Item. Use this to filter Invoice Items for
	 * Shippo Managed Accounts.
	 * @param null|int $page The page number you want to select
	 * @param null|int $results The number of results to return per page (max 100)
	 */
	public function __construct(
		protected ?string $invoiceObjectId = null,
		protected ?string $invoiceNumber = null,
		protected ?string $shippoAccountId = null,
		protected ?int $page = null,
		protected ?int $results = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'invoiceObjectId' => $this->invoiceObjectId,
			'invoiceNumber' => $this->invoiceNumber,
			'shippoAccountId' => $this->shippoAccountId,
			'page' => $this->page,
			'results' => $this->results,
		]);
	}
}
