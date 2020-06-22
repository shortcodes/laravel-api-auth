<?php

return [
    'login' => [
        'route' => 'login',
        'action' => 'Auth\LoginController@login',
    ],
    'logout' => [
        'route' => 'logout',
        'name' => 'logout',
        'action' => 'Auth\LoginController@logout',
    ],
    'register' => [
        'route' => 'register',
        'action' => 'Auth\RegisterController@register\'',
    ],
    'remind-password' => [
        'route' => 'password/email',
        'name' => 'password.email',
        'action' => 'Auth\ForgotPasswordController@sendResetLinkEmail',
    ],
    'reset-password' => [
        'route' => 'password/reset',
        'name' => 'password.update',
        'action' => 'Auth\ResetPasswordController@reset',
    ],
    'verification' => [
        'route' => 'email/verify/{id}/{hash}',
        'name' => 'verification.verify',
        'action' => 'Auth\VerificationController@verify',
    ],
    'resend-activation' => [
        'route' => 'email/resend',
        'name' => 'verification.resend',
        'action' => 'Auth\VerificationController@resend',
    ],
];
