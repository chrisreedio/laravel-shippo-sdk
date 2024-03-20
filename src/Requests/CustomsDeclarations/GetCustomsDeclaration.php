<?php

namespace ChrisReedIO\ShippoSDK\Requests\CustomsDeclarations;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCustomsDeclaration
 *
 * Returns an existing customs declaration using an object ID
 */
class GetCustomsDeclaration extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/customs/declarations/{$this->customsDeclarationId}";
    }

    /**
     * @param  string  $customsDeclarationId  Object ID of the customs declaration
     * @param  null|int  $page  The page number you want to select
     */
    public function __construct(
        protected string $customsDeclarationId,
        protected ?int $page = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page]);
    }
}
