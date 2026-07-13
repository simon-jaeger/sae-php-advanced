<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function Laravel\Ai\{agent};

class AiController {
  function prompt(Request $request) {
    $prompt = $request->input('prompt');
    $response = Http::post('http://localhost:11434/api/generate', [
      'model' => 'gemma4:e2b',
      'prompt' => $prompt,
      'stream' => false,
    ]);
    $data = $response->json();
    return $data;
  }

  function ask(Request $request) {
    $question = $request->input('question');
    $response = agent()->prompt($question);
    return [
      'answer' => $response->text,
    ];
  }

}
