@extends('layout2')

@section('content')
<div class="container">
  	@include('partials/errors')

  <form class="login-form" role="form" method="POST" action="{{ route('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input name="email" type="email" value="{{ old('email') }}" class="form-control" placeholder="Username" autofocus>



        </div>
        <div class="input-group">
            <span class="input-group-addon"><i class="icon_key_alt"></i></span>
            <input name="password" type="password" class="form-control" placeholder="Password">

        </div>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Remember me
            <span class="pull-right"> <a href="password"> Forgot Password?</a></span>
        </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
        <a class="btn btn-primary btn-lg btn-block" href="register" role="button">Register</a>

    </div>
  </form>

</div>

@endsection
