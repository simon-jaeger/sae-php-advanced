<?php

namespace App\Models;

use Bootstrap\Model;
use Bootstrap\Column;

class Example extends Model {
  #[Column] public int $id;
  #[Column] public string $name;
}
