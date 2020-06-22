# authentication
Package with basic controllers, routes and specyfication to speed up development process

# initial package provides routes

You can change those endpoints in config file

**api-auth.php**

    return [
      'login' => 'login',
      'logout' => 'logout',
      'register' => 'register',
      'remind-password' => 'password/email',
      'reset-password' => 'password/reset',
      'verification' => 'email/verify/{id}/{hash}',
      'resend-activation' => 'email/resend',
    ],

# Publish

To publish configs you simple need to run 

    php artisan vendor:publish --provider="Shortcodes\Authentication\AuthenticationPackageProvider"
