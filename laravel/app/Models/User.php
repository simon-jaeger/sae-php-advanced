<?php

namespace App\Models;

use Bootstrap\Model;
use Bootstrap\Column;

use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;

class User extends Model {
  use HasApiTokens;

  #[Column] public int $id;
  #[Column] public string $email;
  #[Column] public string $password;
  #[Column] public bool $is_admin;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $hidden = ['password'];

  protected $casts = [
    'password' => 'hashed',
    'is_admin' => 'bool',
  ];

  static function validate(Request $request) {
    $requiredIfNew = $request->isMethod("POST") ? "required" : "sometimes";
    return $request->validate([
      'email' => [$requiredIfNew, "email"],
      'password' => [$requiredIfNew, "min:8"],
    ]);
  }

  function articles() {
    return $this->hasMany(Article::class);
  }

  function comments() {
    return $this->hasMany(Comment::class);
  }

  function uploads() {
    return $this->hasMany(Upload::class);
  }
}
