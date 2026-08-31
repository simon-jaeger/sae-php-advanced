<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Http\Request;
use Laravel\Mcp\Client;
use function Laravel\Ai\{agent};

class AiController {
  function chat(Request $request) {
    $msg = $request->input('msg');
    $response = agent()->prompt($msg);
    return [
      'text' => $response->text,
      'usage' => $response->usage,
    ];
  }

  function summarize(Request $request) {
    $id = $request->input('id');
    $article = Article::findOrFail($id);
    $msg = 'Summarize the following article:' . $article->toJson();
    $response = agent()->prompt($msg);
    return [
      'text' => $response->text,
      'usage' => $response->usage,
    ];
  }

  function nsfw(Request $request) {
    $id = $request->input('id');
    $article = Article::findOrFail($id);
    $msg = 'Is this article nswf?:' . $article->toJson();
    $schema = fn(JsonSchema $schema) => [
      'nsfw' => $schema->boolean()->required(),
    ];
    $response = agent(schema: $schema)->prompt($msg);
    return [
      'nsfw' => $response['nsfw'],
      'usage' => $response->usage,
    ];
  }

  function mcp(Request $request) {
    $url = $request->input('url');
    $tool = $request->input('tool');
    $args = $request->input('args');
    $client = Client::web($url); // ->withToken($apiKey)
    if (!$tool) return $client->tools();
    $response = $client->callTool($tool, $args);
    return [
      'text' => $response->text(),
    ];
  }
}
