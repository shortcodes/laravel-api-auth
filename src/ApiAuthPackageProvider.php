<?php

namespace Shortcodes\LaravelApiAuth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ApiAuthPackageProvider extends ServiceProvider
{
    public function boot()
    {
        Route::macro('apiAuthRoutes', function () {
            Route::post(config('api-auth.login.route'), config('api-auth.login.action'));
            Route::post(config('api-auth.logout.route'), config('api-auth.logout.action'))->name(config('api-auth.logout.name'));
            Route::post(config('api-auth.register.route'), config('api-auth.register.action'));
            Route::post(config('api-auth.remind-password.route'), config('api-auth.remind-password.action'))->name(config('api-auth.remind-password.name'));
            Route::post(config('api-auth.reset-password.route'), config('api-auth.reset-password.action'))->name(config('api-auth.reset-password.name'));
            Route::get(config('api-auth.verification.route'), config('api-auth.verification.action'))->name(config('api-auth.verification.name'));
            Route::post(config('api-auth.resend-activation.route'), config('api-auth.resend-activation.action'))->name(config('api-auth.resend-activation.name'));
        });

        $this->publishes([
            __DIR__ . '/config/api-auth.php' => config_path('api-auth.php'),
        ]);
    }
}
