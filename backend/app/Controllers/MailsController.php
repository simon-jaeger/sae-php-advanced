<?php

namespace App\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

// basic mailing example
// uses https://ethereal.email/ during local development (see also config/mail.php)

class MailsController {
  function send(Request $request) {
    $user = Auth::user();
    $mail = new WelcomeMail($user);
    // return $mail->render(); // for testing
    Mail::send($mail);
    return $mail->to;
  }
}
