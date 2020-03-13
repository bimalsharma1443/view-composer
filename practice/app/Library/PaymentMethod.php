<?php 

namespace App\Library;

class PaymentMethod
{

	protected $currency;
	protected $changes = 0;

	public function __construct($currency)
	{
		$this->currency = $currency;
	}

	public function addCharge($changes)
	{
		$this->changes = $changes;
	}

	public function charge($amount)
	{

		return [
			'amount' => $amount+$this->changes,
			'currency' => $this->currency,
			'charge' => $this->changes
		];

	}


}