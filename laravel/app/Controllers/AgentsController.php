<?php

namespace App\Controllers;

use App\Agents\ConversationAgent;
use App\Agents\SupportAgent;
use App\Agents\TranslatorAgent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentsController {
  function support(Request $request) {
    $user = Auth::user();
    $msg = $request->input('msg');
    $agent = new SupportAgent($user);
    $response = $agent->prompt($msg);
    return [
      'text' => $response->text,
      'usage' => $response->usage,
    ];
  }

  function translate(Request $request) {
    $text = $request->input('text');
    $agent = new TranslatorAgent();
    $response = $agent->prompt($text);
    return [
      'output' => $response->structured,
      'usage' => $response->usage,
    ];
  }

  function conversation(Request $request) {
    $user = Auth::user();
    $msg = $request->input('msg');
    $agent = new ConversationAgent($user);
    $response = $agent->prompt($msg);
    $agent->remember($msg, $response->text);
    return [
      'text' => $response->text,
      'usage' => $response->usage,
    ];
  }
}
