<?php

namespace App\Models;

use Config\Model;
use WendellAdriel\Lift\Attributes\Column;

class Comment extends Model {
  #[Column]
  public string $text;

  #[Column]
  public int $article_id;

  #[Column]
  public int $user_id;
}
