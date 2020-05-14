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
        @include('layouts.alerts')
	  		
	  		<form action="{{ route('user.postSignUp') }}" method="post">
	  			@csrf
	  			@method('POST')
	  			<div class="form-group">
	  		    <label for="name">Name</label>
	  		    <input type="text" name="name" 
	  		    class="form-control" 
	  		    id="name" placeholder="Name">
	  		    @if($errors->has('name'))
				    	<strong class="text-danger">{{ $errors->first('name') }}</strong>
				    @endif
	  		  </div>

	  		  <div class="form-group">
	  		    <label for="email">Email address</label>
	  		    <input type="email" name="email" 
	  		    class="form-control" id="email" 
	  		    aria-describedby="emailHelp" placeholder="Enter email">
	  		    @if($errors->has('email'))
				    	<strong class="text-danger">{{ $errors->first('email') }}</strong>
				    @endif
	  		  </div>

	  		  <div class="form-group">
	  		    <label for="password">Password</label>
	  		    <input type="password" name="password" 
	  		    class="form-control" 
	  		    id="password" placeholder="Password">
	  		    @if($errors->has('password'))
				    	<strong class="text-danger">{{ $errors->first('password') }}</strong>
				    @endif
	  		  </div>
	 
	  		  <button type="submit" class="btn btn-success btn-lg">Register</button>
	  		</form>
	  	</div>
	  	<div class="col-md-4"></div>
	  </div>
	</div>
</body>
</html>