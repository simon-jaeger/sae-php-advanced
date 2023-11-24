<?php

namespace Config\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider {
  public const HOME = '/';

  public function boot(): void {
    RateLimiter::for('api', function (Request $request) {
      return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
    });

    $this->routes(function () {
      Route::group([], base_path('app/Routes/api.php'));
//      Route::middleware('api')->group(base_path('app/Routes/api.php'));
    });
  }
}
