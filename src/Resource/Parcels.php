<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Parcels\CreateParcel;
use ChrisReedIO\ShippoSDK\Requests\Parcels\GetParcel;
use ChrisReedIO\ShippoSDK\Requests\Parcels\ListParcels;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Parcels extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listParcels(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListParcels($page, $results));
	}


	public function createParcel(): Response
	{
		return $this->connector->send(new CreateParcel());
	}


	/**
	 * @param string $parcelId Object ID of the parcel
	 */
	public function getParcel(string $parcelId): Response
	{
		return $this->connector->send(new GetParcel($parcelId));
	}
}
