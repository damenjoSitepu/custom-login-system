<?php 

namespace App\Interfaces\Application\Auth\Login;

interface LoginMessageInterface {
    /**
     * When user successfully login
     * @return string
     */
    public static function successLogin(string $fullName): string;

    /**
     * When invalid username  
     * @return string
     */
    public static function failUsernameLogin(): string;

    /**
     * When invalid password
     * @return string
     */
    public static function failPasswordLogin(): string;
}