<?php

namespace ChrisReedIO\ShippoSDK\Requests\CarrierParcelTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * GetCarrierParcelTemplate
 *
 * Fetches the parcel template information for a specific carrier parcel template, identified by the
 * token.
 */
class GetCarrierParcelTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/parcel-templates/{$this->carrierParcelTemplateToken}";
	}


	/**
	 * @param string $carrierParcelTemplateToken The unique string representation of the carrier parcel template
	 */
	public function __construct(
		protected string $carrierParcelTemplateToken,
	) {
	}
}
