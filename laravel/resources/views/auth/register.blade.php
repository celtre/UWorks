@extends('layout2')

@section('content')


					@include('partials/errors')
					<body>

				    <div class="container">

				      <form class="login-form" role="form" method="POST" action="{{ route('register') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
				        <div class="login-wrap">
				            <p class="login-img"><i class="icon_lock_alt"></i></p>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_profile"></i></span>
				              <input type="text" class="form-control" placeholder="name" name="name" value="{{ old('name') }}" autofocus>
				            </div>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_profile"></i></span>
				              <input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}">
				            </div>
				            <div class="input-group">
				                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				                <input type="password" class="form-control" placeholder="Password" name="password">
				            </div>
				            <div class="input-group">
				              <span class="input-group-addon"><i class="icon_key_alt"></i></span>
				              <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
				            </div>

				            <button class="btn btn-primary btn-lg btn-block" type="submit">send</button>


				        </div>
				      </form>

				    </div>


				  </body>


@endsection
