<?php 

namespace App\Interfaces\Application\Auth\Registration;

interface RegistrationMessageInterface {
	/**
	 * When user succesfully registered message
	 * @return string
	 */
	public static function successRegister(): string;

	/**
	 * When user failed to be registered message
	 * @return string
	 */
	public static function failRegister(): string;
}