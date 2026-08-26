<?php

namespace App\Agents\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Support\Facades\Http;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;

class WebTool implements Tool {
  function description(): string {
    return 'fetches the html of a website';
  }

  function schema(JsonSchema $schema): array {
    return ['url' => $schema->string()->required()];
  }

  function handle(Request $request): string {
    $url = $request->string('url');
    $response = Http::get($url);
    return $response->body();
  }
}
