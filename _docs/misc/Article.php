<?php

namespace App\Models;

use Bootstrap\Column;
use Bootstrap\Model;

class Article extends Model {
  #[Column] public int $id;
  #[Column] public string $title;
  #[Column] public string $content;
  #[Column] public string $created_at;
  #[Column] public string $updated_at;
}
