<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;
use Illuminate\Http\Request;

class Upload extends Model {
  #[Column] public int $id;
  #[Column] public string $path;
  #[Column] public bool $is_public;
  #[Column] public int $user_id;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $casts = ['is_public' => 'boolean'];

  static function validate(Request $request) {
    return $request->validate([
      'file' => ['file', 'max:5000'], // max:5000 -> max 5mb
      'is_public' => ['boolean'],
    ]);
  }
}
