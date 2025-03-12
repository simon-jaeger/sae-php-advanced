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
  #[Column] public array $profile;
  #[Column] public array $languages;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $casts = [
    'profile' => 'array', // automatically converts between php assoc array and json object
    'languages' => 'array', // automatically converts between php array and json array
  ];

  function articles() {
    return $this->hasMany(Article::class);
  }

  function comments() {
    return $this->hasMany(Comment::class);
  }

  static function validate(Request $request) {
    $post = $request->method() === 'POST';
    return $request->validate([
      'email' => [($post ? 'required' : 'sometimes'), 'email', 'unique:users,email'],
      'password' => [($post ? 'required' : 'sometimes'), 'min:8'],
      'profile' => ['array'],
      'languages' => ['array'],
      // 'profile.firstName' => ['max:10'], // optionally validate sub fields
      // 'profile.lastName' => ['max:10'], // optionally validate sub fields
    ]);
  }

  static function booted() {
    self::saving(function (User $user) {
      if (!Hash::isHashed($user->password))
        $user->password = Hash::make($user->password);
    });
  }
}
