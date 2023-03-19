<?php 

namespace App\Interfaces\Application\Auth\Login;

interface LoginTextStatusInterface {
    /**
	 * When username not found
	 * @return string
	 */
	public static function invalidUsername(): string;

    /**
     * When password not match
     * @return string
     */
    public static function invalidPassword(): string;

    /**
     * When login success
     * @return string
     */
    public static function validLogin(): string;
}