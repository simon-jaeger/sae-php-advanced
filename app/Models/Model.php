<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as BaseModel;
use VicGutt\AutoModelCast\Contracts\AutoCastable;
use VicGutt\AutoModelCast\Concerns\HasAutoCasting;

// base model class
class Model extends BaseModel implements AutoCastable {
  use HasAutoCasting;

  protected $guarded = ['id'];
  protected $hidden = ['pivot', 'password'];

  public $timestamps = false;
}
