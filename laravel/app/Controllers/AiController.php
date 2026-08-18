<?php

namespace App\Controllers;

use App\Models\Article;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\Http\Request;
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
}
