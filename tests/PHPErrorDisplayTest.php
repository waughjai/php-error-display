<?php

use PHPUnit\Framework\TestCase;
use WaughJ\PHPErrorDisplay\PHPErrorDisplay;

class PHPErrorDisplayTest extends TestCase
{
	public function testBehavior()
	{
		PHPErrorDisplay::turnOn();
		$this->assertEquals( '1', ini_get( 'display_errors' ) );
		$this->assertEquals( E_ALL, error_reporting() );
		PHPErrorDisplay::turnOff();
		$this->assertEquals( '0', ini_get( 'display_errors' ) );
		$this->assertEquals( 0, error_reporting() );
	}
}
