<?php

namespace Config\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetDefaultHeaders {
  public function handle(Request $request, Closure $next): Response {
    // force rest api request
    if (!$request->header('X-Requested-With'))
      $request->headers->set('X-Requested-With', 'XMLHttpRequest');
    if (!$request->header('Content-Type'))
      $request->headers->set('Content-Type', 'application/json');

    // force rest api response
    $response = $next($request);
    if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8')
      $response->headers->set('Content-Type', 'text/plain');

    return $response;
  }
}
