@extends('layout')

@section('content')
<body class="login-img3-body">

	<div class="container">

		<form class="login-form" action="index.html">
			<div class="login-wrap">
					<p class="login-img"><i class="icon_lock_alt"></i></p>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="email" class="form-control" placeholder="email" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="password" class="form-control" placeholder="old password" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="password" class="form-control" placeholder="new password" autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="password" class="form-control" placeholder="confirm password" autofocus>
					</div>
					<button class="btn btn-primary btn-lg btn-block" type="submit">send</button>


			</div>
		</form>

	</div>



	<div class="container">
		<form class="login-form" role ="form" method="POST" action="password">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="login-wrap">
					<p class="login-img"><i class="icon_lock_alt"></i></p>

					<div class="input-group">
						<span class="input-group-addon"><i class="icon_profile"></i></span>
						<input type="email" class="form-control" placeholder="email" name="email" value="{{ old('email') }}"  autofocus>
					</div>


					<button class="btn btn-primary btn-lg btn-block" type="submit">send</button>


			</div>
			@include('partials/errors')
		</form>

	</div>


</body>
@endsection
