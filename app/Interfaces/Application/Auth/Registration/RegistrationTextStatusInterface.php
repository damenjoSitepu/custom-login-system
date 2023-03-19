<?php 

namespace App\Interfaces\Application\Auth\Registration;

interface RegistrationTextStatusInterface {
    /**
	 * When registration failed
	 * @return string
	 */
	public static function invalidRegistration(): string;

    /**
     * When registration success
     * @return string
     */
    public static function validRegistration(): string;
}