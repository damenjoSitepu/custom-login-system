<?php 

namespace App\Messages\Application\Auth\Registration;

class RegistrationMessage {
    private static $successRegister = 'User Successfully Registered';
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