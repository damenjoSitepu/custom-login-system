<?php 

namespace App\Messages\Application\Auth\Credential;

// Interface
use App\Interfaces\Application\Auth\Credential\CredentialMessageInterface;

class CredentialMessage implements CredentialMessageInterface {
    /**
     * Fail login because username is not exists
     */
    const USER_CREDENTIAL_NOT_FOUND = 'User Credential Is Not Authorized';
}