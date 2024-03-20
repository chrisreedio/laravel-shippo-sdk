<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\CarrierParcelTemplates\GetCarrierParcelTemplate;
use ChrisReedIO\ShippoSDK\Requests\CarrierParcelTemplates\ListCarrierParcelTemplates;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class CarrierParcelTemplates extends Resource
{
    /**
     * @param  string  $include  filter by user or enabled
     * @param  string  $carrier  filter by specific carrier
     */
    public function listCarrierParcelTemplates(?string $include, ?string $carrier): Response
    {
        return $this->connector->send(new ListCarrierParcelTemplates($include, $carrier));
    }

    /**
     * @param  string  $carrierParcelTemplateToken  The unique string representation of the carrier parcel template
     */
    public function getCarrierParcelTemplate(string $carrierParcelTemplateToken): Response
    {
        return $this->connector->send(new GetCarrierParcelTemplate($carrierParcelTemplateToken));
    }
}
