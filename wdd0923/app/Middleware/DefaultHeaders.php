<?php

namespace App\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultHeaders {
  function handle(Request $request, Closure $next): Response {
    $request->headers->set('X-Requested-With', 'XMLHttpRequest');
    $request->headers->set('Content-Type', 'application/json');

    $response = $next($request);
    $response->headers->set('Content-Type', 'application/json');

    return $response;
  }
}
