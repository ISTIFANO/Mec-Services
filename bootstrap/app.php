<?php

use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ClientMiddleware;
use App\Http\Middleware\MechanicienMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->group('admin', [AdminMiddleware::class]);
        $middleware->group('client', [ClientMiddleware::class]); 
        $middleware->group('mechanicien', [MechanicienMiddleware::class]); 
    })->withExceptions(function (Exceptions $exceptions) {
        //
            
    })->create();
