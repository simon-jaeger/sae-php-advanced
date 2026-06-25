<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;

class Tag extends Model {
  #[Column] public int $id;
  #[Column] public string $name;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  static $rules = [
    'name' => ['min:1', 'max:99', 'unique:tags,name'],
  ];
}
