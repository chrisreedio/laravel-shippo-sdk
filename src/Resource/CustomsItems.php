<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\CustomsItems\CreateCustomsItem;
use ChrisReedIO\ShippoSDK\Requests\CustomsItems\GetCustomsItem;
use ChrisReedIO\ShippoSDK\Requests\CustomsItems\ListCustomsItems;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class CustomsItems extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listCustomsItems(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListCustomsItems($page, $results));
	}


	public function createCustomsItem(): Response
	{
		return $this->connector->send(new CreateCustomsItem());
	}


	/**
	 * @param string $customsItemId Object ID of the customs item
	 * @param int $page The page number you want to select
	 */
	public function getCustomsItem(string $customsItemId, ?int $page): Response
	{
		return $this->connector->send(new GetCustomsItem($customsItemId, $page));
	}
}
