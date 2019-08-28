<?php

namespace App;

use PayPal\Payment;

class Car
{

	protected $quantity;
	protected $price;
	protected $total;

	public function __construct($quantity, $price)
	{
		$this->quantity = $quantity;
		$this->price    = $price;

		$this->total    = $quantity * $price;
	}

	public function action(Payment $payment)
	{
		return $payment->play($this->total);
	}

}