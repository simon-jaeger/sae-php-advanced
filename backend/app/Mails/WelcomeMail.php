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
      ->subject('Welcome')
      ->html(
        '<h1>Welcome</h1>' .
        '<p>Glad to have you on board.</p>' .
        '<p>' . $this->user->email . '</p>'
      );
  }
}
