<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

// basic mailing example
// uses https://ethereal.email/ during local development (see also config/mail.php)

class MailsController {
  function send(Request $request) {
    // prepare mail
    $subject = $request->input('subject');
    $content = $request->input('content');
    $to = $request->input('to');

    // send mail (alternatively use Mail::html)
    Mail::raw(
      $content,
      fn($mail) => $mail->to($to)->subject($subject),
    );

    // confirm
    return 'mail sent to: ' . $to;
  }
}
