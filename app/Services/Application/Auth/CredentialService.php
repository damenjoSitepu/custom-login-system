<?php 

namespace App\Services\Application\Auth; 

// Text Status
use App\TextStatus\Application\Auth\Credential\CredentialTextStatus;

class CredentialService {
    /**
     * Check user credential by given userCredential Global Session
     * @param string
     */
    public function checkUserCredential(): string
    { 
        if (!session()->has('userCredential')) {
            return CredentialTextStatus::invalidUserCredential();
        }
        return session()->get('userCredential');
    }
}