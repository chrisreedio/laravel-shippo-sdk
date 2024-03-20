<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\CreateCarrierAccount;
use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\GetCarrierAccount;
use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\GetCarrierRegistrationStatus;
use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\ListCarrierAccounts;
use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\RegisterCarrierAccount;
use ChrisReedIO\ShippoSDK\Requests\CarrierAccounts\UpdateCarrierAccount;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Http\Response;

class CarrierAccounts extends Resource
{
    /**
     * @param  bool  $serviceLevels  Appends the property `service_levels` to each returned carrier account
     * @param  string  $carrier  Filter the response by the specified carrier
     * @param  string  $accountId  Filter the response by the specified carrier account Id
     * @param  int  $page  The page number you want to select
     * @param  int  $results  The number of results to return per page (max 100)
     */
    public function listCarrierAccounts(
        ?bool $serviceLevels,
        ?string $carrier,
        ?string $accountId,
        ?int $page,
        ?int $results,
    ): Response {
        return $this->connector->send(new ListCarrierAccounts($serviceLevels, $carrier, $accountId, $page, $results));
    }

    public function createCarrierAccount(): Response
    {
        return $this->connector->send(new CreateCarrierAccount());
    }

    /**
     * @param  string  $carrierAccountId  Object ID of the carrier account
     */
    public function getCarrierAccount(string $carrierAccountId): Response
    {
        return $this->connector->send(new GetCarrierAccount($carrierAccountId));
    }

    /**
     * @param  string  $carrierAccountId  Object ID of the carrier account
     */
    public function updateCarrierAccount(string $carrierAccountId): Response
    {
        return $this->connector->send(new UpdateCarrierAccount($carrierAccountId));
    }

    public function registerCarrierAccount(): Response
    {
        return $this->connector->send(new RegisterCarrierAccount());
    }

    /**
     * @param  string  $carrier  filter by specific carrier
     */
    public function getCarrierRegistrationStatus(string $carrier): Response
    {
        return $this->connector->send(new GetCarrierRegistrationStatus($carrier));
    }
}
