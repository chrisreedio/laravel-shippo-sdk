<?php

namespace ChrisReedIO\ShippoSDK\Requests\Invoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListInvoices
 *
 * <b> Endpoint is in beta and API contract is subject to change. </b> <br><br>
 * Retrieves a collection
 * of invoices that belong to the authenticated user.
 * Date range and invoice status filters can be
 * used to filter the result set. The results are paginated. Please see
 * <a
 * href="https://docs.goshippo.com/docs/api_concepts/filtering/" target="blank"> filtering
 * documentation</a> for more information
 * on date filtering and pagination.
 */
class ListInvoices extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/invoices';
    }

    /**
     * @param  null|int  $page  The page number you want to select
     * @param  null|int  $results  The number of results to return per page (max 100)
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
