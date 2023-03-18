<?php 

namespace App\Interfaces\Application\Auth\Registration;

// Request
use App\Http\Requests\Application\Auth\Registration\RegistrationRequest;

// Laravel Type Hinting
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

interface RegistrationControllerInterface {
	/**
     * Registration Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke(): View;

	/**
     * Create New User
     * @param App\Http\Requests\Application\Auth\Registration\RegistrationRequest
     * @return Illuminate\Http\RedirectResponse
     */
    public function establish(RegistrationRequest $req): RedirectResponse;
}

