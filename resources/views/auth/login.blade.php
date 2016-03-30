@extends('app')

@section('css')
	<link href="{{ 'css/loginpage.css' }}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
<div class="container content hmlogin">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> There were some problems with your input.<br><br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<form class="reg-page" role="form" method="POST" action="{{ url('login') }}">
				<div class="reg-header">
					<h2>Login Manager Account</h2>
				</div>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="input-group margin-bottom-20">
					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="example@gmail.com">
				</div>

				<div class="input-group margin-bottom-20">
					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
					<input type="password" class="form-control" name="password" placeholder="password">
				</div>

				<hr></hr>

				<div class="row">
					<div class="col-md-6 checkbox">
						<label><input type="checkbox" name="remember"> Remember Me</label>
					</div>
					<div class="col-md-6">
						<button class="btn-u pull-right" type="submit">Login</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
