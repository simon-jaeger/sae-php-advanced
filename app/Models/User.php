<?php

namespace App\Models;

use Config\Base\Model;
use Laravel\Sanctum\HasApiTokens;

/**
 * @property string $id
 * @property string $email
 * @property string $password
 */
class User extends Model {
  use HasApiTokens;

  static function booted() {
    static::saving(function (User $user) {
      if ($user->isDirty('password'))
        $user->password = \Hash::make($user->password);
    });
  }
}
