<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

// manual: php artisan command-name
// scheduled: php artisan schedule:work --verbose
// for sub minute intervals, wait up to 60 seconds to start

Artisan::command('foobar', function () {
  $total = \App\Models\Article::count();
  Log::info('total articles: ' . $total);
})->everyFiveSeconds();

