<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout\CreateLiveRate;
use ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout\DeleteDefaultParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout\GetDefaultParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\RatesAtCheckout\UpdateDefaultParcelTemplate;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class RatesAtCheckout extends Resource
{
	public function createLiveRate(): Response
	{
		return $this->connector->send(new CreateLiveRate());
	}


	public function getDefaultParcelTemplate(): Response
	{
		return $this->connector->send(new GetDefaultParcelTemplate());
	}


	public function updateDefaultParcelTemplate(): Response
	{
		return $this->connector->send(new UpdateDefaultParcelTemplate());
	}


	public function deleteDefaultParcelTemplate(): Response
	{
		return $this->connector->send(new DeleteDefaultParcelTemplate());
	}
}
