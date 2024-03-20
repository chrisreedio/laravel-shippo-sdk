<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Manifests\CreateManifest;
use ChrisReedIO\ShippoSDK\Requests\Manifests\GetManifest;
use ChrisReedIO\ShippoSDK\Requests\Manifests\ListManifests;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Manifests extends Resource
{
    /**
     * @param  int  $page  The page number you want to select
     * @param  int  $results  The number of results to return per page (max 100)
     */
    public function listManifests(?int $page, ?int $results): Response
    {
        return $this->connector->send(new ListManifests($page, $results));
    }

    public function createManifest(): Response
    {
        return $this->connector->send(new CreateManifest());
    }

    /**
     * @param  string  $manifestId  Object ID of the manifest to update
     */
    public function getManifest(string $manifestId): Response
    {
        return $this->connector->send(new GetManifest($manifestId));
    }
}
