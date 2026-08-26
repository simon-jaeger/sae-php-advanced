<?php

namespace App\Agents;

use Illuminate\Contracts\JsonSchema\JsonSchema;
use Laravel\Ai\Contracts\Agent;
use Laravel\Ai\Contracts\HasStructuredOutput;
use Laravel\Ai\Promptable;

class TranslatorAgent implements Agent, HasStructuredOutput {
  use Promptable;

  function instructions(): string {
    return <<<TXT
      You are a translation agent.
      Translate the given English text into German and French.
      Return the original text and the translations.
    TXT;
  }

  function schema(JsonSchema $schema): array {
    return [
      'english' => $schema->string()->required(),
      'german' => $schema->string()->required(),
      'french' => $schema->string()->required(),
    ];
  }
}
