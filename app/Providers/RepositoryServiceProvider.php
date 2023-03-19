<?php

namespace App\Providers;

// Login
use App\Interfaces\Application\Auth\Login\LoginRepositoryInterface;
use App\Repository\Application\Auth\Login\LoginRepository;
// Registration
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;
use App\Repository\Application\Auth\Registration\RegistrationRepository;
// Dashboard
use App\Interfaces\Application\Dashboard\DashboardRepositoryInterface;
use App\Repository\Application\Dashboard\DashboardRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RegistrationRepositoryInterface::class, RegistrationRepository::class);
        $this->app->bind(LoginRepositoryInterface::class, LoginRepository::class);
        $this->app->bind(DashboardRepositoryInterface::class, DashboardRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
