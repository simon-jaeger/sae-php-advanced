<?php

namespace App\Models;

use Bootstrap\Base\Column;
use Bootstrap\Base\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class User extends Model {
  #[Column]
  public string $email;

  #[Column]
  public string $password;

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
