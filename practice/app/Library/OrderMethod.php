<?php 

namespace App\Library;
use App\Library\PaymentMethod;

class OrderMethod
{

	protected $paymentMethod;

	public function __construct(paymentMethod $paymentMethod)
	{
		$this->paymentMethod = $paymentMethod;
	}


	public function getUser()
	{
		$this->paymentMethod->addCharge(200);
		return [
			'name' => 'bimal Sharma'
		];
	}
	
}