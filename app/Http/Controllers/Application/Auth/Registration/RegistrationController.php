<?php

namespace App\Http\Controllers\Application\Auth\Registration;

use App\Http\Controllers\Controller;

// Interfaces
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;
use App\Interfaces\Application\Auth\Registration\RegistrationControllerInterface;

// Laravel Type Hinting
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

// Request
use App\Http\Requests\Application\Auth\Registration\RegistrationRequest;

// Message
use App\Messages\Application\Auth\Registration\RegistrationMessage;
// Text Status
use App\TextStatus\Application\Auth\Registration\RegistrationTextStatus;

class RegistrationController extends Controller implements RegistrationControllerInterface
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
        // Save user process
        $saveUserProcess = $this->registrationRepository->establish($req);
        if($saveUserProcess === RegistrationTextStatus::invalidRegistration()) 
            return back()->with(config('message.status.fail'),RegistrationMessage::failRegister());
            
        return back()->with(config('message.status.success'),RegistrationMessage::successRegister());
    }
}
