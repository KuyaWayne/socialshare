<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RootController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function () {
  Route::get('/', [RootController::class, "index"])->name("index");
  Route::post("/login", [AuthController::class, "post_login"])->name("login");
  Route::post("/register", [AuthController::class, "post_register"])->name("register");
});

Route::middleware("auth")->group(function() {
  Route::get("/home", [HomeController::class, "get_home"])->name("home");
  Route::post("/logout", [AuthController::class, "post_logout"])->name("logout");
});
