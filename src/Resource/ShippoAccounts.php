<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\ShippoAccounts\CreateShippoAccount;
use ChrisReedIO\ShippoSDK\Requests\ShippoAccounts\GetShippoAccount;
use ChrisReedIO\ShippoSDK\Requests\ShippoAccounts\ListShippoAccounts;
use ChrisReedIO\ShippoSDK\Requests\ShippoAccounts\UpdateShippoAccount;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class ShippoAccounts extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listShippoAccounts(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListShippoAccounts($page, $results));
	}


	public function createShippoAccount(): Response
	{
		return $this->connector->send(new CreateShippoAccount());
	}


	/**
	 * @param string $shippoAccountId Object ID of the ShippoAccount
	 */
	public function getShippoAccount(string $shippoAccountId): Response
	{
		return $this->connector->send(new GetShippoAccount($shippoAccountId));
	}


	/**
	 * @param string $shippoAccountId Object ID of the ShippoAccount
	 */
	public function updateShippoAccount(string $shippoAccountId): Response
	{
		return $this->connector->send(new UpdateShippoAccount($shippoAccountId));
	}
}
