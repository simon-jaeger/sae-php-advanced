<?php

namespace App\Ai\Tools;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;
use Illuminate\Support\Facades\Auth;

class UserTool implements Tool {
  function description(): string {
    return 'this tool may be used to get information about the user';
  }

  function schema(JsonSchema $schema): array {
    return [];
  }

  function handle(Request $request): string {
    return Auth::user();
  }
}
