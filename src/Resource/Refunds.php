<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Refunds\CreateRefund;
use ChrisReedIO\ShippoSDK\Requests\Refunds\GetRefund;
use ChrisReedIO\ShippoSDK\Requests\Refunds\ListRefund;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Refunds extends Resource
{
    public function createRefund(): Response
    {
        return $this->connector->send(new CreateRefund());
    }

    public function listRefund(): Response
    {
        return $this->connector->send(new ListRefund());
    }

    /**
     * @param  string  $refundId  Object ID of the refund to update
     */
    public function getRefund(string $refundId): Response
    {
        return $this->connector->send(new GetRefund($refundId));
    }
}
