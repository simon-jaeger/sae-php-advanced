<?php

namespace Config\Base;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @mixin \Eloquent
 *
 * @property string $created_at
 * @property string $updated_at
 */
class Model extends BaseModel {
  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];
}
