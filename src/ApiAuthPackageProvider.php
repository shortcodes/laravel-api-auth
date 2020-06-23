<?php

namespace Shortcodes\ApiAuth;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class ApiAuthPackageProvider extends ServiceProvider
{
    public function boot()
    {
        Route::macro('apiAuthRoutes', function () {
            Route::post(config('api-auth.login.route', 'login'), config('api-auth.login.action', 'Auth\LoginController@login'));
            Route::post(config('api-auth.logout.route', 'logout'), config('api-auth.logout.action', 'Auth\LoginController@logout'))->name(config('api-auth.logout.name', 'logout'));
            Route::post(config('api-auth.register.route'), config('api-auth.register.action', 'Auth\RegisterController@register'));
            Route::post(config('api-auth.remind-password.route', 'register'), config('api-auth.remind-password.action', 'Auth\ForgotPasswordController@sendResetLinkEmail'))->name(config('api-auth.remind-password.name', 'password.email'));
            Route::post(config('api-auth.reset-password.route', 'password/email'), config('api-auth.reset-password.action', 'Auth\ResetPasswordController@reset'))->name(config('api-auth.reset-password.name', 'password.update'));
            Route::get(config('api-auth.verification.route', 'password/reset'), config('api-auth.verification.action', 'Auth\VerificationController@verify'))->name(config('api-auth.verification.name', 'verification.verify'));
            Route::post(config('api-auth.resend-activation.route', 'email/verify/{id}/{hash}'), config('api-auth.resend-activation.action', 'Auth\VerificationController@resend'))->name(config('api-auth.resend-activation.name', 'verification.resend'));
        });

        $this->publishes([
            __DIR__ . '/config/api-auth.php' => config_path('api-auth.php'),
        ]);
    }
}
