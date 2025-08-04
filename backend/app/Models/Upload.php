<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;

class Upload extends Model {
  #[Column] public int $id;
  #[Column] public string $path;
  #[Column] public string $is_public;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;

  protected $casts = ['is_public' => 'boolean'];

  static $rules = [
    'file' => ['file', 'max: 5000'], // max: 5000 -> max 5mb
    'is_public' => ['boolean'],
  ];
}
