<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
  public function get_home() {
    return view("pages.home");
  }
}
