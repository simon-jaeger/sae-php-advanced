<?php

namespace Config\Base;

use Illuminate\Database\Eloquent\Model as BaseModel;
use WendellAdriel\Lift\Lift;


/**
 * @mixin \Eloquent
 */
class Model extends BaseModel {
  use Lift;

  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];

  public $timestamps = false;
}
