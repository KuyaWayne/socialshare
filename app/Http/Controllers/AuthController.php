<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller {
  public function get_redirect() {
    return redirect()->route("index");
  }

  public function post_login(LoginRequest $request) {
    $email = $request->input("login_email");
    $password = $request->input("login_password");

    $attempt = Auth::attempt([
      "email" => $email,
      "password" => $password
    ]);

    if (!$attempt) {
      return redirect()->back()->withErrors(["message" => "Invalid Email/Password"]);
    }

    return redirect()->route("home");
  }

  public function post_register(RegisterRequest $request) {
    $user = new User();

    $user->firstname = $request->input("firstname");
    $user->middlename = $request->input("middlename");
    $user->lastname = $request->input("lastname");
    $user->birthdate = $request->input("birthdate");
    $user->username = $request->input("username");
    $user->email = $request->input("email");
    $user->password = Hash::make($request->input("password"));

    $user->save();

    event(new Registered($user));

    Auth::attempt([
      "email" => $request->input("email"),
      "password" => $request->input("password")
    ]);

    return redirect()->route("home");
  }

  public function post_logout() {
    Auth::logout();

    return redirect()->route("index");
  }
}
