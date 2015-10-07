@extends('layout')


@section('content')
<body class="login-img3-body">

  <div class="container">

    <form class="login-form" role="form" method="POST" action="{{ route('changepassword') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="login-wrap">
          <p class="login-img"><i class="icon_lock_alt"></i></p>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input name= "email" type="email" class="form-control" placeholder="email" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input name="old_password" type="password" class="form-control" placeholder="old password" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input name = "password" type="password" class="form-control" placeholder="new password" autofocus>
          </div>
          <div class="input-group">
            <span class="input-group-addon"><i class="icon_profile"></i></span>
            <input name = "password_confirmation" type="password" class="form-control" placeholder="confirm password" autofocus>
          </div>
          <button class="btn btn-primary btn-lg btn-block" type="submit">Send</button>


      </div>
    </form>

  </div>


</body>
@endsection
