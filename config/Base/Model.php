<?php

namespace Config\Base;

use Illuminate\Database\Eloquent\Model as BaseModel;

/**
 * @mixin \Eloquent
 */
class Model extends BaseModel {
  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];

  public $timestamps = false;
}