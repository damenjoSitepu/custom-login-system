<?php

namespace App\Http\Controllers\Application\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Login Authentification
     * @return string
     */
    public function __invoke(): String
    {
        return "Login Authentification";
    }
}
