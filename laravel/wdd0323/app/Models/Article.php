<?php

namespace App\Models;

use Config\Model;
use WendellAdriel\Lift\Attributes\Column;

class Article extends Model {
  #[Column]
  public string $title;

  #[Column]
  public string $content;
}
