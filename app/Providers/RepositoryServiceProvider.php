<?php

namespace App\Providers;

// Registration Interface


use App\Interfaces\Application\Auth\Login\LoginRepositoryInterface;
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;
use App\Repository\Application\Auth\Login\LoginRepository;
use App\Repository\Application\Auth\Registration\RegistrationRepository;

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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
