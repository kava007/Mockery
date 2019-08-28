<?php

use PHPUnit\Framework\TestCase;
use App\Temperature;

class TemperatureTest extends TestCase
{

    public function test_get_current_temperature()
    {
        $service = Mockery::mock('External\Service');
        $service->shouldReceive('readTemp')->andReturn(10);

        $temperature = new Temperature($service);

        $this->assertEquals(10, $temperature->current());
    }

}