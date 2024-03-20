<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Pickups\CreatePickup;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Pickups extends Resource
{
    public function createPickup(): Response
    {
        return $this->connector->send(new CreatePickup());
    }
}
