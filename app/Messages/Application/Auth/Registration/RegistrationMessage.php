<?php 

namespace App\Messages\Application\Auth\Registration;

// Interface
use App\Interfaces\Application\Auth\Registration\RegistrationMessageInterface;
class RegistrationMessage implements RegistrationMessageInterface {
	/**
	 * Success register message properties
	 */
    private static $successRegister = 'User Successfully Registered';

	/**
	 * Fail register message properties
	 */
	private static $failRegister = 'User Failed Registered';

	/**
	 * When user succesfully registered message
	 * @return string
	 */
	public static function successRegister(): string {
		return self::$successRegister;
	}

	/**
	 * When user failed to be registered message
	 * @return string
	 */
	public static function failRegister(): string {
		return self::$failRegister;
	}
}