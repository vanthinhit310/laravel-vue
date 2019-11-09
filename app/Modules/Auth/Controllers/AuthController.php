<?php


namespace App\Modules\Auth\Controllers;


use App\Http\Controllers\Controller;
use App\Modules\Auth\Models\User;
use App\Modules\Auth\Request\RegisterRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Throwable;

class AuthController extends Controller
{
  public function getLogin()
  {
    return view('Auth::login');
  }

  public function getRegister()
  {
    return view('Auth::register');
  }


  public function register(RegisterRequest $request)
  {
    try {
      DB::beginTransaction();
      $this->create($request->all());
      DB::commit();
      return redirect()->route('login')
        ->with(['success' => 'Congratulations! your account is registered, you will shortly receive an email to activate your account.']);
    } catch (Throwable $th) {
      DB::rollBack();
      dd($th->getMessage());
    }
  }

  protected function create(array $data)
  {
    $user = User::create([
      'name' => $data['name'],
      'email' => $data['email'],
      'password' => Hash::make($data['password']),
      'remember_token' => str_random(40) . time(),
    ]);
    return $user;
  }
}
