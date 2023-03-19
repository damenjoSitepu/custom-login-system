<?php 

namespace App\Messages\Application\Auth\Credential;

// Interface
use App\Interfaces\Application\Auth\Credential\CredentialMessageInterface;

class CredentialMessage implements CredentialMessageInterface{
    /**
     * Fail login because username is not exists
     */
    private static $failCredential = 'User Credential Is Not Authorized';

    /**
     * When user no have user id credential
     * @param string
     */
    public static function failCredential(): string
    {
        return self::$failCredential;
    }
}