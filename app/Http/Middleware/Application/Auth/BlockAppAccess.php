<?php

namespace App\Http\Middleware\Application\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// Services
use App\Services\Application\General\StatusService;
use App\Services\Application\General\View\AuthViewNameService;
use App\Services\Application\Auth\AppAccessService;
// Messages
use App\Messages\Application\Auth\Credential\AuthorizedMessage;

class BlockAppAccess 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (AppAccessService::blockAppAccessBeforeLogin()) {
            return redirect()->route(AuthViewNameService::PAGE['LOGIN'])->with(StatusService::M_FAIL, AuthorizedMessage::NOT_AUTHORIZED);
        }
        return $next($request);
    }
}
