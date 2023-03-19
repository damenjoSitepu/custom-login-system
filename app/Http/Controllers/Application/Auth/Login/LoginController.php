<?php

namespace App\Http\Controllers\Application\Auth\Login;

use App\Http\Controllers\Controller;

// Laravel type hinting
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
// Request
use App\Http\Requests\Application\Auth\Login\LoginRequest;
// Services
use App\Services\Application\Auth\LoginService;
// Text Status
use App\TextStatus\Application\Auth\Login\LoginTextStatus;
// Messages
use App\Messages\Application\Auth\Login\LoginMessage;
// Interfaces 
use App\Interfaces\Application\Auth\Login\LoginControllerInterface;
class LoginController extends Controller implements LoginControllerInterface
{
    /**
     * Instantiate
     * @param App\Services\Application\Auth\LoginService
     */
    public function __construct(
        private LoginService $loginService
    ){}

    /**
     * Login Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke(): View
    {
        return view('auth.login.index');
    }
    
    /**
     * Login Functionality
     * @param App\Http\Requests\Application\Auth\Login\LoginRequest
     * @return Illuminate\Http\RedirectResponse
     */
    public function stepIn(LoginRequest $req): RedirectResponse
    {
        // Request Validation
        $req->validated();
        // Check user credential authentification
        $userInfo = $this->loginService->checkUserInfo($req);
        if ($userInfo === LoginTextStatus::invalidUsername()) 
            return back()->with(config('message.status.fail'),LoginMessage::failUsernameLogin())->withInput();
        if ($userInfo === LoginTextStatus::invalidPassword()) 
            return back()->with(config('message.status.fail'),LoginMessage::failPasswordLogin())->withInput();
        // Set Session
        $req->session()->put('userCredential',$userInfo->id);
        // Login Success
        return redirect()->route('dashboard.view')->with(config('message.status.success'),LoginMessage::successLogin($userInfo->full_name));
    }
}
