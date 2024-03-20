<?php

namespace ChrisReedIO\ShippoSDK\Requests\Invoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetInvoice
 *
 * <b> Endpoint is in beta and API contract is subject to change.</b> <br><br>Returns a single invoice
 * using an object ID.
 */
class GetInvoice extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/invoices/{$this->invoiceObjectId}";
    }

    /**
     * @param  string  $invoiceObjectId  Object ID of the Invoice
     */
    public function __construct(
        protected string $invoiceObjectId,
    ) {
    }
}
