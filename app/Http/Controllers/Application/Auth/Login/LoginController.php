<?php

namespace App\Http\Controllers\Application\Auth\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Login Authentification View
     * @return \Illuminate\View\View
     */
    public function __invoke()
    {
        return view('auth.login.index');
    }
    
    public function stepIn(Request $req)
    {
        $req->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        return "Successfully Login";
    }
}
