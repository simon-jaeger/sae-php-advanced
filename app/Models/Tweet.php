<?php

namespace App\Models;

use Config\Base\Model;

/**
 * @property int $id
 * @property string $text
 * @property int $user_id
 * @property string $created_at
 */
class Tweet extends Model {
  const CREATED_AT = 'created_at';

  function likes() {
    return $this->hasMany(Like::class);
  }
}
