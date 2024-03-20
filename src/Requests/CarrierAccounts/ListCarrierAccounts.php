<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierAccounts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * ListCarrierAccounts
 *
 * Returns a list of all carrier accounts connected to your Shippo account. These carrier accounts
 * include both Shippo carrier accounts and your own carrier accounts that you have connected to your
 * Shippo account.
 *
 * Additionally, you can get information about the service levels associated with each
 * carrier account by passing in the `?service_levels=true` query parameter. <br>
 * Using it appends the
 * property `service_levels` to each carrier account. <br>
 * By default, if the query parameter is
 * omitted, the `service_levels` property will not be included in the response.
 */
class ListCarrierAccounts extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/carrier_accounts';
    }

    /**
     * @param  null|bool  $serviceLevels  Appends the property `service_levels` to each returned carrier account
     * @param  null|string  $carrier  Filter the response by the specified carrier
     * @param  null|string  $accountId  Filter the response by the specified carrier account Id
     * @param  null|int  $page  The page number you want to select
     * @param  null|int  $results  The number of results to return per page (max 100)
     */
    public function __construct(
        protected ?bool $serviceLevels = null,
        protected ?string $carrier = null,
        protected ?string $accountId = null,
        protected ?int $page = null,
        protected ?int $results = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'service_levels' => $this->serviceLevels,
            'carrier' => $this->carrier,
            'account_id' => $this->accountId,
            'page' => $this->page,
            'results' => $this->results,
        ]);
    }
}
