<?php

use PHPUnit\Framework\TestCase;
use App\DB;

class DBTest extends TestCase
{

    public function test_with_mockery()
    {
    	$db = Mockery::mock('DB');
    	$db->shouldReceive('get')->andReturn(true);

    	$this->assertTrue($db->get('users'));
    }

    public function test_without_mockery()
    {
    	$db = new DB;

    	$this->assertTrue($db->get('users'));
    }

}