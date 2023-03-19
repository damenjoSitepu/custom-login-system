<?php 

namespace App\Messages\Application\Auth\Login;

// Interfaces
use App\Interfaces\Application\Auth\Login\LoginMessageInterface;

class LoginMessage implements LoginMessageInterface {
    /**
	 * Success login
	 */
    private static $successLogin = 'Welcome back, ';

    /**
     * Fail login because username is not exists
     */
    private static $failUsernameLogin = 'Username doesn\'t exists';

    /**
     * Fail login because password is not match
     */
    private static $failPasswordLogin = 'Password is invalid';

    /**
	 * When user succesfully login
	 * @return string
	 */
	public static function successLogin(string $fullName): string {
		return self::$successLogin . $fullName;
	}

    /**
     * When user fail to login because invalid username
     * @return string
     */
    public static function failUsernameLogin(): string
    {
        return self::$failUsernameLogin;
    }

    /**
     * When user fail to login because password doesn't match
     * @return string
     */
    public static function failPasswordLogin(): string
    {
        return self::$failPasswordLogin;
    }
}