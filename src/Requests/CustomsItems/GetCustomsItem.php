<?php

namespace ChrisReedIO\ShippoSDK\Requests\CustomsItems;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomsItem
 *
 * Returns an existing customs item using an object ID
 */
class GetCustomsItem extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customs/items/{$this->customsItemId}";
    }

    /**
     * @param  string  $customsItemId  Object ID of the customs item
     * @param  null|int  $page  The page number you want to select
     */
    public function __construct(
        protected string $customsItemId,
        protected ?int $page = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page]);
    }
}
