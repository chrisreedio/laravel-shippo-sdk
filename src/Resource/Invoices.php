<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Invoices\GetInvoice;
use ChrisReedIO\ShippoSDK\Requests\Invoices\ListInvoiceItemsTemplate;
use ChrisReedIO\ShippoSDK\Requests\Invoices\ListInvoices;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class Invoices extends Resource
{
	/**
	 * @param string $invoiceObjectId Object ID of the Invoice
	 */
	public function getInvoice(string $invoiceObjectId): Response
	{
		return $this->connector->send(new GetInvoice($invoiceObjectId));
	}


	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listInvoices(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListInvoices($page, $results));
	}


	/**
	 * @param string $invoiceObjectId The invoice object ID identifier of the Invoice whose Invoice Items you want to select.
	 * @param string $invoiceNumber The invoice number identifier of the Invoice whose Invoice Items you want to select.
	 * @param string $shippoAccountId Account identifier for the owner of the Invoice Item. Use this to filter Invoice Items for
	 * Shippo Managed Accounts.
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listInvoiceItemsTemplate(
		?string $invoiceObjectId,
		?string $invoiceNumber,
		?string $shippoAccountId,
		?int $page,
		?int $results,
	): Response
	{
		return $this->connector->send(new ListInvoiceItemsTemplate($invoiceObjectId, $invoiceNumber, $shippoAccountId, $page, $results));
	}
}
