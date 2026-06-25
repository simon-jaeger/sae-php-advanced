<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;

class Comment extends Model {
  #[Column] public int $id;
  #[Column] public string $text;
  #[Column] public int $article_id;
  #[Column] public int $user_id;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static $rules = [
    'text' => ['min:1', 'max:200'],
    'article_id' => ['exists:articles,id'],
  ];
}
