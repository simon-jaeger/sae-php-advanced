<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Model {
  use HasApiTokens;

  #[Column] public int $id;
  #[Column] public string $email;
  #[Column] public string $password;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $hidden = ['password'];
  protected $casts = ['password' => 'hashed',];
  static $rules = [
    'email' => ['required', 'email', 'unique:users,email'],
    'password' => ['sometimes', 'min:8'],
  ];

  function articles() {
    return $this->hasMany(Article::class);
  }

  function comments() {
    return $this->hasMany(Comment::class);
  }
}
