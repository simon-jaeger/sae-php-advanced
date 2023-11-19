<?php

namespace App\Models;

use Config\Base\Model;
use WendellAdriel\Lift\Attributes\Rules;
use WendellAdriel\Lift\Attributes\Events\Listener;

class Task extends Model {
  public int $id;

  #[Rules(['required', 'string'])]
  public string $name;

  #[Listener]
  function onCreated(Task $task) {
    \Log::info("task created: {$task->name}");
  }
}
