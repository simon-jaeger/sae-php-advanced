<?php

namespace App\Models;

use Bootstrap\Model;
use Bootstrap\Column;

use Illuminate\Http\Request;

class Article extends Model {
  #[Column] public int $id;
  #[Column] public string $title;
  #[Column] public string $content;
  #[Column] public int $user_id;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static function validate(Request $request) {
    $requiredIfNew = $request->isMethod("POST") ? "required" : "sometimes";
    return $request->validate([
      'title' => [$requiredIfNew, "max:99"],
      'content' => [$requiredIfNew, "max:9999"],
    ]);
  }
}
