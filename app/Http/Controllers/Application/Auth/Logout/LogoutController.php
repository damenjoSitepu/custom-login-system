<?php

namespace App\Http\Controllers\Application\Auth\Logout;

use App\Http\Controllers\Controller;

// Laravel Type Hinting
use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    /**
     * Logout functionality and remove any user credential session
     * @return Illuminate\Http\RedirectResponse
     */
    public function __invoke(): RedirectResponse
    {
        // Check session user credential
        if (session()->has('userCredential')) {
            session()->pull('userCredential');
        }
        return redirect()->route('auth.login.view');
    }
}
