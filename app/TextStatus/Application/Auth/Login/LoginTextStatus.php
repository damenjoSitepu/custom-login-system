<?php 

namespace App\TextStatus\Application\Auth\Login;

// Interfaces
use App\Interfaces\Application\Auth\Login\LoginTextStatusInterface;
class LoginTextStatus implements LoginTextStatusInterface {
    /**
	 * Username not found properties
	 */
    private static $invalidUsername = 'INVALID USERNAME';

    /**
     * Password is not match properties
     */
    private static $invalidPassword = "INVALID PASSWORD";

    /**
     * Success Login
     */
    private static $validLogin = "LOGIN SUCCESS";

	/**
	 * When username not found
	 * @return string
	 */
	public static function invalidUsername(): string 
    {
		return self::$invalidUsername;
	}

    /**
     * When password not match
     * @return string
     */
    public static function invalidPassword(): string 
    {
        return self::$invalidPassword;
    }

    /**
     * When login success
     * @return string
     */
    public static function validLogin(): string 
    {
        return self::$validLogin;
    }
}