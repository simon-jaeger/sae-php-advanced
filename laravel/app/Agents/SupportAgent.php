<?php

namespace App\Agents;

use App\Agents\Tools\WebTool;
use App\Models\User;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasTools;
use Laravel\Ai\Promptable;

class SupportAgent implements Agent, HasTools {
  use Promptable;

  public User $user;

  function __construct($user) {
    $this->user = $user;
  }

  function instructions(): string {
    return <<<TXT
      You are a helpful support agent.
      Current user: {$this->user->toJson()}
    TXT;
  }

  function tools(): array {
    return [new WebTool()];
  }
}
