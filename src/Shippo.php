<?php

namespace ChrisReedIO\ShippoSDK;

use ChrisReedIO\ShippoSDK\Resource\Addresses;
use ChrisReedIO\ShippoSDK\Resource\Batches;
use ChrisReedIO\ShippoSDK\Resource\CarrierAccounts;
use ChrisReedIO\ShippoSDK\Resource\CarrierParcelTemplates;
use ChrisReedIO\ShippoSDK\Resource\CustomsDeclarations;
use ChrisReedIO\ShippoSDK\Resource\CustomsItems;
use ChrisReedIO\ShippoSDK\Resource\Invoices;
use ChrisReedIO\ShippoSDK\Resource\Manifests;
use ChrisReedIO\ShippoSDK\Resource\Orders;
use ChrisReedIO\ShippoSDK\Resource\Parcels;
use ChrisReedIO\ShippoSDK\Resource\Pickups;
use ChrisReedIO\ShippoSDK\Resource\Rates;
use ChrisReedIO\ShippoSDK\Resource\RatesAtCheckout;
use ChrisReedIO\ShippoSDK\Resource\Refunds;
use ChrisReedIO\ShippoSDK\Resource\ServiceGroups;
use ChrisReedIO\ShippoSDK\Resource\Shipments;
use ChrisReedIO\ShippoSDK\Resource\ShippoAccounts;
use ChrisReedIO\ShippoSDK\Resource\TrackingStatus;
use ChrisReedIO\ShippoSDK\Resource\Transactions;
use ChrisReedIO\ShippoSDK\Resource\UserParcelTemplates;
use Saloon\Http\Connector;

/**
 * Shippo external API.
 *
 * Use this API to integrate with the Shippo service
 */
class Shippo extends Connector
{
	public function resolveBaseUrl(): string
	{
		return 'https://api.goshippo.com';
	}


	public function addresses(): Addresses
	{
		return new Addresses($this);
	}


	public function batches(): Batches
	{
		return new Batches($this);
	}


	public function carrierAccounts(): CarrierAccounts
	{
		return new CarrierAccounts($this);
	}


	public function carrierParcelTemplates(): CarrierParcelTemplates
	{
		return new CarrierParcelTemplates($this);
	}


	public function customsDeclarations(): CustomsDeclarations
	{
		return new CustomsDeclarations($this);
	}


	public function customsItems(): CustomsItems
	{
		return new CustomsItems($this);
	}


	public function invoices(): Invoices
	{
		return new Invoices($this);
	}


	public function manifests(): Manifests
	{
		return new Manifests($this);
	}


	public function orders(): Orders
	{
		return new Orders($this);
	}


	public function parcels(): Parcels
	{
		return new Parcels($this);
	}


	public function pickups(): Pickups
	{
		return new Pickups($this);
	}


	public function rates(): Rates
	{
		return new Rates($this);
	}


	public function ratesAtCheckout(): RatesAtCheckout
	{
		return new RatesAtCheckout($this);
	}


	public function refunds(): Refunds
	{
		return new Refunds($this);
	}


	public function serviceGroups(): ServiceGroups
	{
		return new ServiceGroups($this);
	}


	public function shipments(): Shipments
	{
		return new Shipments($this);
	}


	public function shippoAccounts(): ShippoAccounts
	{
		return new ShippoAccounts($this);
	}


	public function trackingStatus(): TrackingStatus
	{
		return new TrackingStatus($this);
	}


	public function transactions(): Transactions
	{
		return new Transactions($this);
	}


	public function userParcelTemplates(): UserParcelTemplates
	{
		return new UserParcelTemplates($this);
	}
}
