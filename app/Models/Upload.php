<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Config\Base\Model;
use Storage;

/**
 * @property int $id
 * @property file $name
 */
class Upload extends Model {
  protected $appends = ['url'];

  public function getUrlAttribute() {
    return Storage::url($this->file);
  }
}
