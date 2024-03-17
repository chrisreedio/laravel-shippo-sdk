<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\TrackingStatus\CreateTrack;
use ChrisReedIO\ShippoSDK\Requests\TrackingStatus\GetTrack;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class TrackingStatus extends Resource
{
	public function createTrack(): Response
	{
		return $this->connector->send(new CreateTrack());
	}


	/**
	 * @param string $trackingNumber Tracking number
	 * @param string $carrier Name of the carrier
	 */
	public function getTrack(string $trackingNumber, string $carrier): Response
	{
		return $this->connector->send(new GetTrack($trackingNumber, $carrier));
	}
}
