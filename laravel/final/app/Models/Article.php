<?php

namespace App\Models;

use Config\Model;
use WendellAdriel\Lift\Attributes\Column;
use Illuminate\Http\Request;

class Article extends Model {
  #[Column]
  public string $title;

  #[Column]
  public string $content;

  #[Column]
  public int $user_id;

  static function validate(Request $request) {
    $post = $request->method() === 'POST';
    return $request->validate([
      'title' => [$post ? 'required' : 'sometimes', 'min:1', 'max: 200'],
      'content' => [$post ? 'required' : 'sometimes', 'min:1', 'max: 60000'],
    ]);
  }
}
