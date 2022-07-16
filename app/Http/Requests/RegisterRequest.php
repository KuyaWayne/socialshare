<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class RegisterRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return !Auth::check();
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, mixed>
   */
  public function rules() {
    return [
      "firstname" => "required|string",
      "middlename" => "nullable|string",
      "lastname" => "required|string",
      "birthdate" => "required|date",
      "username" => "required|string|unique:users,username",
      "email" => "required|string|unique:users,email",
      "password" => "required|string|confirmed",
    ];
  }
}
