<?php 

namespace App\TextStatus\Application\Auth\Credential;

// Interfaces
use App\Interfaces\Application\Auth\Credential\CredentialTextStatusInterface;

class CredentialTextStatus implements CredentialTextStatusInterface {
    /**
	 * When credential user id is null properties
	 */
    private static $invalidUserCredential = 'INVALID USER CREDENTIAL';

    /**
	 * When credential user id is null
	 * @return string
	 */
	public static function invalidUserCredential(): string 
    {
        return self::$invalidUserCredential;
    }
}