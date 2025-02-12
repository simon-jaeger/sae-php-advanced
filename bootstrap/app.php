<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

return Application::configure(basePath: dirname(__DIR__))
  ->withRouting(api: __DIR__ . '/../routes/api.php', apiPrefix: '')
  ->withMiddleware(function (Middleware $middleware) {
    $middleware->append(makeDefaultHeaders());
  })
  ->withExceptions()
  ->create();

function makeDefaultHeaders() {
  class DefaultHeaders {
    function handle(Request $request, Closure $next): Response {
      $request->headers->set('X-Requested-With', 'XMLHttpRequest');
      $request->headers->set('Content-Type', 'application/json');
      $response = $next($request);
      $response->headers->set('Content-Type', 'application/json');
      return $response;
    }
  }

  return DefaultHeaders::class;
}

