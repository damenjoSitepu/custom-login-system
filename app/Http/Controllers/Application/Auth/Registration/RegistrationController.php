<?php

namespace App\Http\Controllers\Application\Auth\Registration;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

// Interfaces
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;
use Illuminate\Http\RedirectResponse;

// Request
use App\Http\Requests\Application\Auth\Registration\RegistrationRequest;

// Message
use App\Messages\Application\Auth\Registration\RegistrationMessage;

class RegistrationController extends Controller
{
    /**
     * Registration Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('auth.registration.index');
    }

    /**
     * Instantiate New Interface
     * @param App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface
     */
    public function __construct (
        private RegistrationRepositoryInterface $registrationRepository
    )
    {}

    /**
     * Create New User
     * @param App\Http\Requests\Application\Auth\Registration\RegistrationRequest
     * @return Illuminate\Http\RedirectResponse
     */
    public function establish(RegistrationRequest $req): RedirectResponse
    {
        // Request Validation
        $req->validated();
        
        if ($this->registrationRepository->establish($req)) {
            return back()->with(config('message.status.success'),RegistrationMessage::successRegister());
        }

        return back()->with(config('message.status.fail'),RegistrationMessage::failRegister());
    }
}
