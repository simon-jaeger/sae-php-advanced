<?php

namespace Config\Base;

use Illuminate\Database\Eloquent\Model as BaseModel;
use VicGutt\AutoModelCast\Concerns\HasAutoCasting;

/**
 * @mixin \Eloquent
 */
class Model extends BaseModel {
  use HasAutoCasting;

  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];

  public $timestamps = false;
}
