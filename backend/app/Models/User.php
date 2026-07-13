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
  #[Column] public int $role;
  #[Column] public array $profile;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $hidden = ['password'];

  protected $casts = [
    'password' => 'hashed',
    'profile' => 'array'
  ];

  static $rules = [
    'email' => ['email'],
    'password' => ['min:8'],
    'profile' => ['array'],
  ];

  function articles() {
    return $this->hasMany(Article::class);
  }

  function comments() {
    return $this->hasMany(Comment::class);
  }

  function uploads() {
    return $this->hasMany(Upload::class);
  }

  function isAdmin() {
    return $this->role === 1;
  }
}
