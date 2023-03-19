<?php 

namespace App\Messages\Application\Auth\Credential;

class AuthorizedMessage {
    /**
     * Message for user who trying to 
     * access route without 
     * doing login
     */
    const NOT_AUTHORIZED = "You've been not authorized to enter this app for now";

    /**
     * Message for user who trying to access outside 
     * guard route ( login, registration, etc ) 
     * with authorized / login permission
     */
    const LEAVE_WITHOUT_AUTHORIZED = "You've need to logout using our button";
}