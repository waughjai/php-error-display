<?php

declare( strict_types = 1 );
namespace WaughJ\PHPErrorDisplay;

class PHPErrorDisplay
{
	public static function turnOn()
	{
		ini_set( 'display_errors', '1' );
		error_reporting( E_ALL );
	}

	public static function turnOff()
	{
		ini_set( 'display_errors', '0' );
		error_reporting( 0 );
	}

	public static function setDisplay( string $value ) : void
	{
		ini_set( 'display_errors', $value );
		ini_set( 'display_warnings', $value );
	}
}
