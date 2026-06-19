<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    api: __DIR__ . '/../routes/api.php',
    apiPrefix: '',
    commands: __DIR__ . '/../routes/console.php',
  )
  ->withMiddleware(function (Middleware $middleware) {
    //
  })
  ->withExceptions()
  ->create();
