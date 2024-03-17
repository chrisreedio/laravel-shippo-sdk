<?php

namespace ChrisReedIO\ShippoSDK\Resource;

use ChrisReedIO\ShippoSDK\Requests\Transactions\CreateTransaction;
use ChrisReedIO\ShippoSDK\Requests\Transactions\GetTransaction;
use ChrisReedIO\ShippoSDK\Requests\Transactions\ListTransactions;
use ChrisReedIO\ShippoSDK\Resource;
use Saloon\Contracts\Response;

class Transactions extends Resource
{
	/**
	 * @param int $page The page number you want to select
	 * @param int $results The number of results to return per page (max 100)
	 */
	public function listTransactions(?int $page, ?int $results): Response
	{
		return $this->connector->send(new ListTransactions($page, $results));
	}


	public function createTransaction(): Response
	{
		return $this->connector->send(new CreateTransaction());
	}


	/**
	 * @param string $transactionId Object ID of the transaction to update
	 */
	public function getTransaction(string $transactionId): Response
	{
		return $this->connector->send(new GetTransaction($transactionId));
	}
}
