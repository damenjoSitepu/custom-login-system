<?php

namespace App\Providers;

// Registration Interface
use App\Interfaces\Application\Auth\Registration\RegistrationRepositoryInterface;
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
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
