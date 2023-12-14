<?php

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = new Illuminate\Foundation\Application(
  $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

class DefaultHeaders {
  public function handle(Request $request, Closure $next): Response {
    // default request headers
    if (!$request->header('X-Requested-With'))
      $request->headers->set('X-Requested-With', 'XMLHttpRequest');
    if (!$request->header('Content-Type'))
      $request->headers->set('Content-Type', 'application/json');

    // default response headers
    $response = $next($request);
    if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8')
      $response->headers->set('Content-Type', 'text/plain');

    return $response;
  }
}

class CustomHttpKernel extends HttpKernel {
  protected $middleware = [
    \Illuminate\Http\Middleware\HandleCors::class,
    \Illuminate\Foundation\Http\Middleware\ValidatePostSize::class,
    \Illuminate\Foundation\Http\Middleware\TrimStrings::class,
    \Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull::class,
    DefaultHeaders::class,
  ];

  protected $middlewareAliases = [
    'auth' => Illuminate\Auth\Middleware\Authenticate::class,
  ];
}

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
  Illuminate\Contracts\Http\Kernel::class,
  CustomHttpKernel::class
);

$app->singleton(
  Illuminate\Contracts\Console\Kernel::class,
  Illuminate\Foundation\Console\Kernel::class
);

$app->singleton(
  Illuminate\Contracts\Debug\ExceptionHandler::class,
  Illuminate\Foundation\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;
