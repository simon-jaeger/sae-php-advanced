<?php

namespace App\Models;

use Config\Base\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 * @property string $avatar
 */
class User extends Model {
  use HasApiTokens;

  function articles() {
    return $this->hasMany(Article::class);
  }

  static function booted() {
    static::saving(function (User $user) {
      if ($user->isDirty('password'))
        $user->password = \Hash::make($user->password);
    });
  }
}
