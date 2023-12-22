<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::if('roles', function (array $roles) {
            return Auth::check() && in_array(Auth::user()->role, $roles, true);
        });
        Blade::if('role', function (string $role) {
            return Auth::check() && Auth::user()->role === $role;
        });
    }
}
