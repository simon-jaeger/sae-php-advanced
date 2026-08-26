<?php

namespace App\Agents;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\Conversational;
use Laravel\Ai\Messages\Message;
use Laravel\Ai\Promptable;

class ConversationAgent implements Agent, Conversational {
  use Promptable;

  public User $user;

  function __construct(User $user) {
    $this->user = $user;
  }

  function instructions(): string {
    return <<<TXT
      You are a conversational assistant.
      You remember the full conversation history with the user.
    TXT;
  }

  function messages(): iterable {
    $path = "conversations/user-{$this->user->id}.json";
    $history = Storage::exists($path) ? json_decode(Storage::get($path), true) : [];
    return collect($history)
      ->map(fn($x) => new Message($x['role'], $x['content']))
      ->all();
  }

  function remember(string $userMsg, string $assistantMsg): void {
    $path = "conversations/user-{$this->user->id}.json";
    $history = Storage::exists($path) ? json_decode(Storage::get($path), true) : [];
    array_push($history,
      ['role' => 'user', 'content' => $userMsg],
      ['role' => 'assistant', 'content' => $assistantMsg],
    );
    Storage::put($path, json_encode($history));
  }
}
