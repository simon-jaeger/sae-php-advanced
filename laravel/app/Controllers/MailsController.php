<?php

namespace App\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mails\NewsletterMail;

// uses https://ethereal.email/ during local development (see also config/mail.php)

class MailsController {
  function newsletter(Request $request) {
    if (!Auth::user()->is_admin) return abort(401, 'admin only');
    $user_id = $request->input("user_id");
    $user = User::findOrFail($user_id);
    $mail = new NewsletterMail($user);
    Mail::send($mail);
    return $mail;
  }
}
