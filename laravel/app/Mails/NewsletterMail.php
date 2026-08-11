<?php

namespace App\Mails;

use Illuminate\Mail\Mailable;
use App\Models\User;

class NewsletterMail extends Mailable {
  public User $user;

  function __construct($user) {
    $this->user = $user;
  }

  function build() {
    return $this
      ->to($this->user->email)
      ->subject('newsletter')
      ->html(
        "<h1>hello {$this->user->name}</h1>" .
        '<p>check out our latest news</p>'
      );
  }
}
