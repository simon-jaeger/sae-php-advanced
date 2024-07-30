<?php

namespace App\Models;

use Config\Model;
use WendellAdriel\Lift\Attributes\Column;
use Illuminate\Http\Request;
use Laravel\Sanctum\HasApiTokens;
use WendellAdriel\Lift\Attributes\Hidden;

class User extends Model {
  use HasApiTokens;

  #[Column]
  public string $email;

  #[Column] #[Hidden]
  public string $password;

  static function validate(Request $request) {
    $post = $request->method() === 'POST';
    return $request->validate([
      'email' => ['required', 'email'],
      'password' => [$post ? 'required' : 'sometimes', 'min:8'],
    ]);
  }

  static function booted() {
    self::saving(function (User $user) {
      if ($user->isDirty('password')) {
        $plain = $user->getAttribute('password');
        $user->setAttribute('password', \Hash::make($plain));
      }
    });
  }
}
