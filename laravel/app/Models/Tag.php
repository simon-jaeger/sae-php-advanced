<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;
use Illuminate\Http\Request;

class Tag extends Model {
  #[Column] public int $id;
  #[Column] public string $name;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static function validate(Request $request) {
    $requiredIfNew = $request->isMethod("POST") ? "required" : "sometimes";
    return $request->validate([
      'name' => [$requiredIfNew, 'max:99', 'unique:tags,name'],
    ]);
  }
}
