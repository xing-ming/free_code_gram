<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

	<script src="{{ url('js/jquery.min.js') }}"></script>
	<script src="{{ url('js/popper.min.js') }}"></script>
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>
	@include('navigation_bar.index')
	
	<div class="container">
	  <div class="row">
	  	<div class="col-md-4"></div>
	  	<div class="col-md-4">
	  		<form action="{{ route('user.postSignIn') }}" method="post">
					@csrf
					@method('POST')
				  <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" name="email" 
				    class="form-control" 
				    id="email" placeholder="Enter email" value="{{ Request::old('email') }}">
				    @if($errors->has('email'))
				    	<strong class="alert-danger">{{ $errors->first('email') }}</strong>
				    @endif
				  </div>

				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" 
				    class="form-control" 
				    id="password" placeholder="Password" value="{{ old('password') }}">
				    @if($errors->has('password'))
				    	<strong class="alert-danger">{{ $errors->first('password') }}</strong>
				    @endif
				  </div>

				  <div class="form-group form-check">
				    <input type="checkbox" name="remember_token" class="form-check-input" id="remember_token">
				    <label class="form-check-label" for="remember_token">Remember me</label>
				  </div>
				  <button type="submit" class="btn btn-success btn-lg">Login</button>
				</form>
	  	</div>
	  	<div class="col-md-4"></div>
	  </div>
	</div>
</body>
</html>