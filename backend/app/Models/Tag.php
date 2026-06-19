<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;

class Tag extends Model {
  #[Column] public int $id;
  #[Column] public string $name;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static function rules($update = false) {
    return [
      'name' => [$update ? 'sometimes' : 'required', 'min:1', 'max: 99', 'unique:tags,name'],
    ];
  }
}
