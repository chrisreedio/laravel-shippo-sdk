<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\CustomsDeclarations\CreateCustomsDeclaration;
use ChrisReedIO\ShippoSDK\Requests\CustomsDeclarations\GetCustomsDeclaration;
use ChrisReedIO\ShippoSDK\Requests\CustomsDeclarations\ListCustomsDeclarations;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class CustomsDeclarations extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listCustomsDeclarations(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListCustomsDeclarations($page, $results));
	}


	public function createCustomsDeclaration(): Response
	{
		return $this->connector->send(new CreateCustomsDeclaration());
	}


	/**
	 * @param string $customsDeclarationId Object ID of the customs declaration
	 * @param int $page The page number you want to select
	 */
	public function getCustomsDeclaration(string $customsDeclarationId, ?int $page): Response
	{
		return $this->connector->send(new GetCustomsDeclaration($customsDeclarationId, $page));
	}
}
