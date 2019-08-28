<?php

use PHPUnit\Framework\TestCase;
use App\Car;

class CarTest extends TestCase
{

    public function test_action()
    {
    	$order = new Car(3, 5);

    	$payment = Mockery::mock('PayPal\Payment');
    	$payment->shouldReceive('play')->andReturn(true);

    	$this->assertTrue($order->action($payment));
    }

}