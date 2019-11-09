<?php

use Illuminate\Support\Facades\Route;

$namespace = 'App\Modules\Auth\Controllers';
Route::group(['prefix' => 'auth','module'=>'Auth', 'namespace' => $namespace,'middleware' => 'web'],
  static function() {
    Route::get('login', [
      'as' => 'login',
      'uses' => 'AuthController@getLogin'
    ]);
    Route::get('register', [
      'as' => 'register',
      'uses' => 'AuthController@getRegister'
    ]);
    Route::post('register', [
      'as' => 'postRegister',
      'uses' => 'AuthController@register'
    ]);
  }
);
