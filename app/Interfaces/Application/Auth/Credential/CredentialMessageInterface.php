<?php 

namespace App\Interfaces\Application\Auth\Credential;

interface CredentialMessageInterface {
    /**
     * When user no have user id credential
     * @param string
     */
    public static function failCredential(): string;
}