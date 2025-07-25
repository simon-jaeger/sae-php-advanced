<?php

namespace App\Models;

use Bootstrap\Model;
use Bootstrap\Column;

class Article extends Model {
  #[Column] public int $id;
  #[Column] public string $title;
  #[Column] public string $content;
  #[Column] public int $user_id;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static $rules = [
    'title' => ['required_without:id', 'min:1', 'max:99'],
    'content' => ['required_without:id', 'min:1', 'max:9999'],
  ];
}
