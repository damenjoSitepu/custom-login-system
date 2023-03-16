<?php

namespace App\Http\Controllers\Application\Auth\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Registration Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        return view('auth.registration.index');
    }
}
