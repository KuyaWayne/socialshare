<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Generator\UrlGenerator;

Route::middleware("guest")->group(function () {
  Route::get('/', [RootController::class, "index"])->name("index");

  Route::get("/login", [AuthController::class, "get_redirect"])->name("login");
  Route::post("/login", [AuthController::class, "post_login"]);

  Route::get("/register", [AuthController::class, "get_redirect"])->name("register");
  Route::post("/register", [AuthController::class, "post_register"]);
});

Route::middleware(["auth", "signed"])->group(function() {
  Route::get("/email/verify/{id}/{hash}", [VerificationController::class, "get_verify_email"])->name("verification.verify");
  Route::get("/email/verify", [VerificationController::class, "get_verification_email"])->name("verification.notice");

  Route::get("/home", [HomeController::class, "get_home"])->name("home");
  Route::post("/logout", [AuthController::class, "post_logout"])->name("logout");
});
