<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller {
  public function get_verification_email() {
    return view("mail.verify");
  }

  public function get_verify_email(EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route("home");
  }
}
