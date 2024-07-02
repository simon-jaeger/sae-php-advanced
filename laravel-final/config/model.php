<?php

namespace Config;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @mixin \Eloquent
 *
 * @property string $created_at
 * @property string $updated_at
 */
class Model extends BaseModel {
  protected $guarded = [];
  protected $hidden = ['password', 'pivot'];
}

