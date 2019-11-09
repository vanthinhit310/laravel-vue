<?php


namespace App\Modules\Auth\Request;


use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize()
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules()
  {
    return [
      'name' => 'required|max:50',
      'email' => 'required|email|unique:users',
      'password' => 'required|confirmed',
    ];
  }

  /**
   * Custom message for validation
   *
   * @return array
   */
  public function messages()
  {
    return [
      'email.required' => 'Email is required!',
      'email.email' => 'Email invalid format!',
      'email.unique' => 'Email has been exits!',
      'name.required' => 'Name is required!',
      'name.max' => 'Name max is 50!',
      'password.required' => 'Password is required!',
      'password.confirmed' => 'Password do not match'
    ];
  }
}
