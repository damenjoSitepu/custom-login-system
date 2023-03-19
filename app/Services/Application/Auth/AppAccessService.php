<?php 

namespace App\Services\Application\Auth;

use Illuminate\Http\Request;

// Services
use App\Services\Application\General\View\AuthViewNameService;

class AppAccessService {
    /**
     * Block auth access if user already login
     * @param Illuminate\Http\Request
     * @return bool
     */
    public static function blockAuthAccessAfterLogin(Request $req): bool
    {
        foreach (AuthViewNameService::PAGE as $authViewName) {
            if (session()->has(config('session.credential')) && $req->route()->getName() === $authViewName) {
                return true;
            }
        }
        return false;
    }

    /**
     * Block auth access if user doesn't login first
     * @return bool
     */
    public static function blockAppAccessBeforeLogin(): bool 
    {
        if (!session()->has(config('session.credential'))) {
            return true;
        }
        return false;
    }
}