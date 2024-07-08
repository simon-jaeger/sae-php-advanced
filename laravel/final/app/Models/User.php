<?php

namespace App\Models;

use Config\Model;
use Laravel\Sanctum\HasApiTokens;
use WendellAdriel\Lift\Attributes\Column;
use WendellAdriel\Lift\Attributes\Hidden;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model {
  use HasApiTokens;

  #[Column]
  public string $email;

  #[Column] #[Hidden]
  public string $password;

  #[Column]
  public string $avatar;

  function articles(): HasMany|Article {
    return $this->hasMany(Article::class);
  }

  static function booted() {
    self::saving(function (User $user) {
      if ($user->isDirty('password')) {
        $plain = $user->getAttribute('password');
        $user->setAttribute('password', \Hash::make($plain));
      }
    });
  }
}
