<?php

namespace App\Models;

use Config\Model;
use WendellAdriel\Lift\Attributes\Column;

class Article extends Model {
  static function rules() {
    return [
      'title' => ['required', "min:1", "max:200"],
      'content' => ['required', 'min:1', "max:20000"],
    ];
  }

  #[Column]
  public string $title;

  #[Column]
  public string $content;
}
