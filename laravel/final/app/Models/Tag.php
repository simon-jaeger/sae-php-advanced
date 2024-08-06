<?php

namespace App\Models;

use Bootstrap\Base\Column;
use Bootstrap\Base\Model;
use Illuminate\Http\Request;

class Tag extends Model {
  #[Column]
  public string $name;

  static function validate(Request $request) {
    return $request->validate([
      'name' => ['required', 'min:1', 'max: 99', 'unique:tags,name'],
    ]);
  }
}
