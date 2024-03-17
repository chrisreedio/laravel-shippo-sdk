<?php

namespace ChrisReedIO\ShippoSDK\Requests\UserParcelTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * DeleteUserParcelTemplate
 *
 * Deletes a user parcel template using an object ID.
 */
class DeleteUserParcelTemplate extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/user-parcel-templates/{$this->userParcelTemplateObjectId}";
	}


	/**
	 * @param string $userParcelTemplateObjectId Object ID of the user parcel template
	 */
	public function __construct(
		protected string $userParcelTemplateObjectId,
	) {
	}
}
