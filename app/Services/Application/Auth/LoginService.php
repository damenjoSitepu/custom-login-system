<?php 

namespace App\Services\Application\Auth;

// Laravel 
use Illuminate\Support\Facades\Hash;
// Interfaces 
use App\Interfaces\Application\Auth\Login\LoginRepositoryInterface;
// Requests
use App\Http\Requests\Application\Auth\Login\LoginRequest;
// Text Status
use App\TextStatus\Application\Auth\Login\LoginTextStatus;


class LoginService {
    /**
     * Instantiate
     * @param App\Interfaces\Application\Auth\Login\LoginRepositoryInterface
     */
    public function __construct(
        private LoginRepositoryInterface $loginRepository
    ){}

    /**
     * Check user info is valid or not
     * @param App\Http\Requests\Application\Auth\Login\LoginRequest
     * @return mixed<string, App\Models\Application\User>
     */
    public function checkUserInfo(LoginRequest $req): mixed
    {
        // Check if username is exists
        $userInfo = $this->loginRepository->checkUserInfoByUsername($req->username);
        if (empty($userInfo) && !$userInfo) {
            return LoginTextStatus::invalidUsername();
        }
        // Check if password doesn't match
        if (!Hash::check($req->password,$userInfo->password)) {
            return LoginTextStatus::invalidPassword();
        }
        // Success Login
        return $userInfo;
    }
}