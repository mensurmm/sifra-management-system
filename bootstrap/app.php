<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register all your custom middleware aliases here
        $middleware->alias([
            'role'          => \App\Http\Middleware\CheckRole::class,
            'guest.gateway' => \App\Http\Middleware\GuestRedirectGateway::class,
            'force.reauth'  => \App\Http\Middleware\ForcePasswordReauth::class,
        ]);

        // Explicitly trust Railway's reverse proxy layer
        $middleware->trustProxies(at: '*');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();