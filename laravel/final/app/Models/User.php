<?php

namespace App\Models;

use Config\Column;
use Config\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;

class User extends Model {
  use HasApiTokens;

  #[Column]
  public string $email;

  #[Column]
  public string $password;

  #[Column]
  public ?string $avatar;

  function articles(): HasMany|Article {
    return $this->hasMany(Article::class);
  }

  function comments(): HasMany|Article {
    return $this->hasMany(Comment::class);
  }

  static function validate(Request $request) {
    $post = $request->method() === 'POST';
    return $request->validate([
      'email' => [$post ? 'required' : 'sometimes', 'email'],
      'password' => [$post ? 'required' : 'sometimes', 'min:8'],
    ]);
  }

  static function booted() {
    self::saving(function (User $user) {
      if ($user->isDirty('password'))
        $user->password = \Hash::make($user->password);
    });
  }
}
