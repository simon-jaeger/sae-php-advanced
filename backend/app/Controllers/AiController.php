<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AiController {
  function prompt(Request $request) {
    $prompt = $request->input('prompt');
    $response = Http::post('http://localhost:11434/api/generate', [
      'model' => 'gemma3:1b',
      'prompt' => $prompt,
      'stream' => false,
    ]);
    $data = $response->json();
    return $data;
  }
}
