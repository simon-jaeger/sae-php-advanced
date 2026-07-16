<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Ai\Agent;
use Illuminate\Support\Facades\Auth;
use Laravel\Mcp\Client;
use function Laravel\Ai\{agent};

class AiController {
  function ask(Request $request) {
    $question = $request->input('question');
    $response = agent()->prompt($question);
    return ['answer' => $response->text];
  }

  function prompt(Request $request) {
    $input = $request->input('input');
    $response = Agent::make()->prompt($input);
    return [
      'text' => $response->text,
      'tool' => $response->toolResults,
    ];
  }

  function mcp(Request $request) {
    $client = Client::web('https://mcp.deepwiki.com/mcp');
    return $client->callTool('ask_question', [
      'repoName' => 'laravel/laravel',
      'question' => 'what programming language does laravel use?',
    ]);
  }
}
