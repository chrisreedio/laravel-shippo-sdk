<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Shipments\CreateShipment;
use ChrisReedIO\ShippoSDK\Requests\Shipments\GetShipment;
use ChrisReedIO\ShippoSDK\Requests\Shipments\ListShipments;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class Shipments extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listShipments(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListShipments($page, $results));
	}


	public function createShipment(): Response
	{
		return $this->connector->send(new CreateShipment());
	}


	/**
	 * @param string $shipmentId Object ID of the shipment to update
	 */
	public function getShipment(string $shipmentId): Response
	{
		return $this->connector->send(new GetShipment($shipmentId));
	}
}
