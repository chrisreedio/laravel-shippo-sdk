<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Addresses\CreateAddress;
use ChrisReedIO\ShippoSDK\Requests\Addresses\GetAddress;
use ChrisReedIO\ShippoSDK\Requests\Addresses\ListAddresses;
use ChrisReedIO\ShippoSDK\Requests\Addresses\ValidateAddress;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class Addresses extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listAddresses(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListAddresses($page, $results));
	}


	public function createAddress(): Response
	{
		return $this->connector->send(new CreateAddress());
	}


	/**
	 * @param string $addressId Object ID of the address
	 */
	public function getAddress(string $addressId): Response
	{
		return $this->connector->send(new GetAddress($addressId));
	}


	/**
	 * @param string $addressId Object ID of the address
	 */
	public function validateAddress(string $addressId): Response
	{
		return $this->connector->send(new ValidateAddress($addressId));
	}
}
