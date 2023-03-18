<?php

namespace App\Http\Controllers\Application\Auth\Registration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// Message Status Config
!defined('SUCCESS') && define('SUCCESS', config('message.status.success', 'success'));
!defined('FAIL') && define('FAIL', config('message.status.fail', 'fail'));

// Interfaces
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;

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
     * @param Illuminate\Http\Request
     * @return Illuminate\Http\RedirectResponse
     */
    public function establish(Request $req)
    {
        // Request Validation
        $req->validate([
            'full_name' => 'required',
            'email'     => 'required',
            'username'  => 'required',
            'password'  => 'required'
        ]);
        
        if ($this->registrationRepository->establish($req))
            return back()->with(SUCCESS,'User Successfully Registered');

        return back()->with(FAIL,'User Failed To Registered');
    }
}
