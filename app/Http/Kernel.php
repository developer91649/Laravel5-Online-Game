<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        \Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode::class,
        \App\Http\Middleware\EncryptCookies::class,
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\View\Middleware\ShareErrorsFromSession::class,
        \App\Http\Middleware\VerifyCsrfToken::class,
    ];

    /**
     * The application's route middleware.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'file.download' => \Romuniverse\File\Http\Middleware\DownloadMiddleware::class,
        'purchase.validate' => \Romuniverse\Purchase\Http\Middleware\ValidateMiddleware::class,
        'purchase.process' => \Romuniverse\Purchase\Http\Middleware\ProcessMiddleware::class,
        'auth' => \App\Http\Middleware\Authenticate::class,
        'auth.basic' => \Illuminate\Auth\Middleware\AuthenticateWithBasicAuth::class,
        'auth.admin' => \Romuniverse\Admin\Http\Middleware\AuthAdminMiddleware::class,
        'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
    ];
}
