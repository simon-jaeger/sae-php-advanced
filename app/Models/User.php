<?php

namespace App\Models;

use Config\Base\Model;
use Laravel\Sanctum\HasApiTokens;

// TODO: hash password (automatic with listener?)

class User extends Model {
  use HasApiTokens;

  public int $id;
  public string $email;
  public string $password;
}
