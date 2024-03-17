<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates\CreateUserParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates\DeleteUserParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates\GetUserParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates\ListUserParcelTemplates;
use ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates\UpdateUserParcelTemplate;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class UserParcelTemplates extends Resource
{
	public function listUserParcelTemplates(): Response
	{
		return $this->connector->send(new ListUserParcelTemplates());
	}


	public function createUserParcelTemplate(): Response
	{
		return $this->connector->send(new CreateUserParcelTemplate());
	}


	/**
	 * @param string $userParcelTemplateObjectId Object ID of the user parcel template
	 */
	public function getUserParcelTemplate(string $userParcelTemplateObjectId): Response
	{
		return $this->connector->send(new GetUserParcelTemplate($userParcelTemplateObjectId));
	}


	/**
	 * @param string $userParcelTemplateObjectId Object ID of the user parcel template
	 */
	public function updateUserParcelTemplate(string $userParcelTemplateObjectId): Response
	{
		return $this->connector->send(new UpdateUserParcelTemplate($userParcelTemplateObjectId));
	}


	/**
	 * @param string $userParcelTemplateObjectId Object ID of the user parcel template
	 */
	public function deleteUserParcelTemplate(string $userParcelTemplateObjectId): Response
	{
		return $this->connector->send(new DeleteUserParcelTemplate($userParcelTemplateObjectId));
	}
}
