<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;

class RngTool implements Tool {
  function description(): string {
    return 'This tool may be used to generate random numbers.';
  }

  function schema(JsonSchema $schema): array {
    return [
      'min' => $schema->integer()->min(0)->required(),
      'max' => $schema->integer()->required(),
    ];
  }

  function handle(Request $request): string {
    return strval(random_int($request['min'], $request['max']));
  }
}
