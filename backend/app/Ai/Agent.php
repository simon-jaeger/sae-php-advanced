<?php

namespace App\Ai;

use App\Ai\Tools\RngTool;
use App\Ai\Tools\UserTool;
use Laravel\Ai\Contracts\Agent as Agentic;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;

class Agent implements Agentic, HasTools {
  use Promptable;

  function instructions(): string {
    return 'you are an ai agent';
  }

  function tools(): array {
    return [
      new RngTool(),
      new UserTool(),
    ];
  }
}
