<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(
    api: __DIR__ . '/../routes/api.php',
    apiPrefix: '',
    commands: __DIR__.'/../routes/console.php',
  )
  ->withMiddleware(function (Middleware $middleware) {
    $middleware->append(DefaultHeaders::class);
  })
  ->withExceptions()
  ->create();

class DefaultHeaders {
  function handle(Request $request, Closure $next): Response {
    $request->headers->set('X-Requested-With', 'XMLHttpRequest');
    $request->headers->set('Content-Type', 'application/json');
    $response = $next($request);
    $response->headers->set('Content-Type', 'text');
    return $response;
  }
}
