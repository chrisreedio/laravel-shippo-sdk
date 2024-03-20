<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Orders\CreateOrder;
use ChrisReedIO\ShippoSDK\Requests\Orders\GetOrder;
use ChrisReedIO\ShippoSDK\Requests\Orders\ListOrders;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class Orders extends Resource
{
    /**
     * @param  int  $page  The page number you want to select
     * @param  int  $results  The number of results to return per page (max 100)
     */
    public function listOrders(?int $page, ?int $results): Response
    {
        return $this->connector->send(new ListOrders($page, $results));
    }

    public function createOrder(): Response
    {
        return $this->connector->send(new CreateOrder());
    }

    /**
     * @param  string  $orderId  Object ID of the order
     */
    public function getOrder(string $orderId): Response
    {
        return $this->connector->send(new GetOrder($orderId));
    }
}
