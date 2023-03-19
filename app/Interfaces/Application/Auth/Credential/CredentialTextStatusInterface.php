<?php 

namespace App\Interfaces\Application\Auth\Credential;

interface CredentialTextStatusInterface {
    /**
	 * When credential user id is null
	 * @return string
	 */
	public static function invalidUserCredential(): string;
}