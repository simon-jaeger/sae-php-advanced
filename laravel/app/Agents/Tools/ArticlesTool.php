<?php

namespace App\Agents\Tools;

use App\Models\Article;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Tool;
use Laravel\Ai\Tools\Request;

class ArticlesTool implements Tool {
  function description(): string {
    return 'fetches a single article by id';
  }

  function schema(JsonSchema $schema): array {
    return ['id' => $schema->integer()->required()];
  }

  function handle(Request $request): string {
    $id = $request->integer('id');
    $article = Article::find($id);
    if ($article) return $article->toJson();
    else return "no article found with this id";
  }
}
