<?php 

namespace App\Interfaces\Application\Auth\Login;

// Laravel type hinting
use \Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
// Requests
use App\Http\Requests\Application\Auth\Login\LoginRequest;

interface LoginControllerInterface {
    /**
     * Login Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke(): View;
    
    /**
     * Login Functionality
     * @param App\Http\Requests\Application\Auth\Login\LoginRequest
     * @return Illuminate\Http\RedirectResponse
     */
    public function stepIn(LoginRequest $req): RedirectResponse;
}