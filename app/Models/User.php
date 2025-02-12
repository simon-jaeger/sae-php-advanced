<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Model {
  use HasApiTokens;

  #[Column] public int $id;
  #[Column] public string $email;
  #[Column] public string $password;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  function articles() {
    return $this->hasMany(Article::class);
  }

  static function validate(Request $request) {
    $post = $request->method() === 'POST';
    return $request->validate([
      'email' => [($post ? 'required' : 'sometimes'), 'email', 'unique:users,email'],
      'password' => [($post ? 'required' : 'sometimes'), 'min:8'],
    ]);
  }

  static function booted() {
    self::saving(function (User $user) {
      if (!Hash::isHashed($user->password))
        $user->password = Hash::make($user->password);
    });
  }
}
