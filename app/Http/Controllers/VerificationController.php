<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;

class VerificationController extends Controller {
  public function get_unverified() {
    return view("verify.failed");
  }

  public function get_verify_email(EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route("home");
  }
}
