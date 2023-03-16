<?php

namespace App\Http\Controllers\Application\Auth\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Registration Authentification
     * @return string
     */
    public function __invoke(): String 
    {
        return "Registration Authentification";
    }
}
