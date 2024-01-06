<?php

namespace App\Models;

use Config\Base\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property int $id
 * @property string $email
 * @property string $password
 */
class User extends Model {
  use HasApiTokens;

  function tweets() {
    return $this->hasMany(Tweet::class);
  }

  function likes() {
    return $this->hasMany(Like::class);
  }

  static function booted() {
    static::saving(function (User $user) {
      if ($user->isDirty('password'))
        $user->password = \Hash::make($user->password);
    });
  }
}
