<?php

namespace Config;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @mixin \Eloquent
 */
class Model extends BaseModel {
  protected $guarded = [];
  protected $hidden = ['password', 'pivot'];
}

