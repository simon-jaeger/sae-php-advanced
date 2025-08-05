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
  #[Column] public bool $is_admin;
  #[Column] public array $profile;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $hidden = ['password'];
  protected $casts = [
    'password' => 'hashed',
    'is_admin' => 'boolean',
    'profile' => 'array'
  ];

  static $rules = [
    'email' => ['required_without:id', 'email', 'unique:users,email'],
    'password' => ['required_without:id', 'min:8'],
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
}
