<?php

namespace App\Models;

use Bootstrap\Model;
use Bootstrap\Column;

use Illuminate\Http\Request;

class User extends Model {
  #[Column] public int $id;
  #[Column] public string $email;
  #[Column] public string $password;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $casts = ['password' => 'hashed'];
  protected $hidden = ['password'];

  static function validate(Request $request) {
    $requiredIfNew = $request->isMethod("POST") ? "required" : "sometimes";
    return $request->validate([
      'email' => [$requiredIfNew, "email"],
      'password' => [$requiredIfNew, "min:8"],
    ]);
  }
}
