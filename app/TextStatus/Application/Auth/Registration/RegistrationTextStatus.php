<?php

namespace App\TextStatus\Application\Auth\Registration;

// Interfaces
use App\Interfaces\Application\Auth\Registration\RegistrationTextStatusInterface;

class RegistrationTextStatus implements RegistrationTextStatusInterface {
    /**
	 * Success registration process properties
	 */
    private static $validRegistration = 'VALID REGISTRATION';

    /**
     * Fail registration process properties
     */
    private static $invalidRegistration = 'INVALID REGISTRATION';

    /**
     * When registration success
     * @return string
     */
    public static function validRegistration(): string
    {
        return self::$validRegistration;
    }

    /**
	 * When registration failed
	 * @return string
	 */
	public static function invalidRegistration(): string
    {
        return self::$invalidRegistration;
    }
}