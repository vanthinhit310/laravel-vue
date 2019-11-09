@extends('layouts.app')

@section('content')
  <div class="login-form">
    <form action="" method="post">
      @csrf
      <h2 class="text-center">Register</h2>
      <div class="text-center social-btn">
      </div>
      <div class="or-seperator"><i>or</i></div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="name" placeholder="Fullname" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-user"></i></span>
          <input type="text" class="form-control" name="username" placeholder="Username" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmed" required="required">
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-success btn-block login-btn">Sign in</button>
      </div>
      <div class="clearfix">
        <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
        <a href="#" class="pull-right text-success">Forgot Password?</a>
      </div>

    </form>
    <div class="hint-text small">Don't have an account? <a href="#" class="text-success">Register Now!</a></div>
  </div>
@endsection
