<?php

namespace App\Http\Controllers\Application\Dashboard;

use App\Http\Controllers\Controller;

// Repository Interfaces
use App\Interfaces\Application\Dashboard\DashboardRepositoryInterface;
// Services
use App\Services\Application\Auth\CredentialService;
// Text Status
use App\TextStatus\Application\Auth\Credential\CredentialTextStatus;
use App\TextStatus\Application\Dashboard\DashboardTextStatus;
// Messages
use App\Messages\Application\Auth\Credential\CredentialMessage;
use App\Messages\Application\Dashboard\DashboardMessage;

class DashboardController extends Controller
{
    /**
     * Instantiate
     * @param App\Interfaces\Application\Dashboard\DashboardRepositoryInterface
     */
    public function __construct(
        private DashboardRepositoryInterface $dashboardRepository,
        private CredentialService $credentialService
    ) 
    {}

    /**
     * Dashboard Main View
     * @return mixed<Illuminate\View\View, Illuminate\Http\RedirectResponse>
     */
    public function __invoke(): mixed
    {
        // Check user credential
        $userId = $this->credentialService->checkUserCredential();

        // If credential is invalid
        if ($userId === CredentialTextStatus::invalidUserCredential())
            return redirect()->route('auth.login.view')->with(config('message.status.fail'),CredentialMessage::failCredential());

        // Find Full name by user id credential
        $userFullName = $this->dashboardRepository->profileInfo($userId);
        if ($userFullName === DashboardTextStatus::invalidFullName())
            return redirect()->route('auth.login.view')->with(config('message.status.fail'),DashboardMessage::failGetFullName());
            
        // Return Dashboard view
        return view('dashboard.index', [
            'userFullName' => $userFullName
        ]);
    }
}
