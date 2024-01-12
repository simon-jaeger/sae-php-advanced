<?php

namespace Config\Base;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @mixin \Eloquent
 */
class Model extends BaseModel {
  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];

  const UPDATED_AT = null;
  const CREATED_AT = null;
}
