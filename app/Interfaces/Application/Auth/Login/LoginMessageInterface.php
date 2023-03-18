<?php 

namespace App\Interfaces\Application\Auth\Login;

interface LoginMessageInterface {
    /**
     * When user successfully login
     */
    public static function successLogin(string $fullName): string;

    /**
     * When invalid username  
     */
    public static function failUsernameLogin(): string;

    /**
     * When invalid password
     */
    public static function failPasswordLogin(): string;
}