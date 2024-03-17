<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\ServiceGroups\CreateServiceGroup;
use ChrisReedIO\ShippoSDK\Requests\ServiceGroups\DeleteServiceGroup;
use ChrisReedIO\ShippoSDK\Requests\ServiceGroups\ListServiceGroups;
use ChrisReedIO\ShippoSDK\Requests\ServiceGroups\UpdateServiceGroup;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class ServiceGroups extends Resource
{
	public function listServiceGroups(): Response
	{
		return $this->connector->send(new ListServiceGroups());
	}


	public function updateServiceGroup(): Response
	{
		return $this->connector->send(new UpdateServiceGroup());
	}


	public function createServiceGroup(): Response
	{
		return $this->connector->send(new CreateServiceGroup());
	}


	/**
	 * @param string $serviceGroupId Object ID of the service group
	 */
	public function deleteServiceGroup(string $serviceGroupId): Response
	{
		return $this->connector->send(new DeleteServiceGroup($serviceGroupId));
	}
}
