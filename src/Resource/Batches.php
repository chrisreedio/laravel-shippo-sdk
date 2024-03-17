<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Batches\AddShipmentsToBatch;
use ChrisReedIO\ShippoSDK\Requests\Batches\CreateBatch;
use ChrisReedIO\ShippoSDK\Requests\Batches\GetBatch;
use ChrisReedIO\ShippoSDK\Requests\Batches\PurchaseBatch;
use ChrisReedIO\ShippoSDK\Requests\Batches\RemoveShipmentsFromBatch;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class Batches extends Resource
{
	public function createBatch(): Response
	{
		return $this->connector->send(new CreateBatch());
	}


	/**
	 * @param string $batchId Object ID of the batch
	 */
	public function getBatch(string $batchId): Response
	{
		return $this->connector->send(new GetBatch($batchId));
	}


	/**
	 * @param string $batchId Object ID of the batch
	 */
	public function addShipmentsToBatch(string $batchId): Response
	{
		return $this->connector->send(new AddShipmentsToBatch($batchId));
	}


	/**
	 * @param string $batchId Object ID of the batch
	 */
	public function purchaseBatch(string $batchId): Response
	{
		return $this->connector->send(new PurchaseBatch($batchId));
	}


	/**
	 * @param string $batchId Object ID of the batch
	 */
	public function removeShipmentsFromBatch(string $batchId): Response
	{
		return $this->connector->send(new RemoveShipmentsFromBatch($batchId));
	}
}
