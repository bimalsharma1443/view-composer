<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library\PaymentMethod;
use App\Library\OrderMethod;

class PaymentController extends Controller
{

	public function payment(paymentMethod $paymentMethod,OrderMethod $orderMethod)
	{
		$orderMethod->getUser();
		$payment = $paymentMethod->charge(2000);
		dd($payment);
	}


}
