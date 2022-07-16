<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RootController;
use App\Http\Controllers\VerificationController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
  Route::get('/', [RootController::class, "index"])->name("index");

  Route::get("/login", [AuthController::class, "get_redirect"])->name("login");
  Route::post("/login", [AuthController::class, "post_login"]);

  Route::get("/register", [AuthController::class, "get_redirect"])->name("register");
  Route::post("/register", [AuthController::class, "post_register"]);
});

Route::post("/logout", [AuthController::class, "post_logout"])->middleware(["auth"])->name("logout");

Route::get("/email/verify", [VerificationController::class, "get_unverified"])->middleware("auth")->name("verification.notice");
Route::get("/email/verify/{id}/{hash}", [VerificationController::class, "get_verify_email"])->middleware(["auth", "signed"])->name("verification.verify");

Route::middleware(["auth", "verified"])->group(function () {
  Route::get("/home", [HomeController::class, "get_home"])->name("home");
});
