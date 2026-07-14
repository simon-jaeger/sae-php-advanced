<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Ai\Agent;
use function Laravel\Ai\{agent};

class AiController {
  function ask(Request $request) {
    $question = $request->input('question');
    $response = agent()->prompt($question);
    return ['answer' => $response->text];
  }

  function prompt(Request $request) {
    // set_time_limit(60);
    $input = $request->input('input');
    $response = Agent::make()->prompt($input);
    return [
      'text' => $response->text,
      'tool' => $response->toolResults,
    ];
  }
}
