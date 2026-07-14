<?php

namespace App\Ai;

use Laravel\Mcp\Server as McpServer;
use Laravel\Mcp\Server\Attributes\Instructions;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Version;

#[Name('Mcp')]
#[Version('0.0.1')]
#[Instructions('Instructions describing how to use the server and its features.')]
class Mcp extends McpServer {
  protected array $tools = [
    //
  ];

  protected array $resources = [
    //
  ];

  protected array $prompts = [
    //
  ];
}
