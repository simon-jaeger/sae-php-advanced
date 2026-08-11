<?php

namespace App\Mails;

use Illuminate\Mail\Mailable;
use App\Models\User;

class WelcomeMail extends Mailable {
  public User $user;

  function __construct($user) {
    $this->user = $user;
  }

  function build() {
    return $this
      ->to($this->user->email)
      ->subject('welcome')
      ->html(
        "<h1>welcome {$this->user->name}</h1>" .
        '<p>enjoy your stay!</p>'
      );
  }
}
