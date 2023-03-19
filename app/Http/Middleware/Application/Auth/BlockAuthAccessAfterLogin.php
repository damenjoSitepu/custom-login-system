<?php

namespace App\Http\Middleware\Application\Auth;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// Services
use App\Services\Application\Auth\AppAccessService;
use App\Services\Application\General\StatusService;
// Messages
use App\Messages\Application\Auth\Credential\AuthorizedMessage;

class BlockAuthAccessAfterLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (AppAccessService::blockAuthAccessAfterLogin($request)) {
            return back()->with(StatusService::M_FAIL, AuthorizedMessage::LEAVE_WITHOUT_AUTHORIZED);
        }
        return $next($request);
    }
}
