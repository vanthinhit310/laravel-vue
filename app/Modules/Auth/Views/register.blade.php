@extends('welcome')
@section('page-title')  Register @stop
@section('content')
  <div class="login-form">
    <form autocomplete="off" action="{{ route('postRegister') }}" method="POST">
      @csrf
      <h2 class="text-center">Register</h2>
      <div class="text-center social-btn">
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="name" placeholder="Fullname">
        </div>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="email" placeholder="Username">
        </div>
        @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmed">
        </div>
        @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block login-btn">Register</button>
      </div>

    </form>
    <div class="hint-text small">You have an account? <a href="{{ route('login') }}" class="text-success">Login Now!</a></div>
  </div>
@endsection
