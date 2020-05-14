<!DOCTYPE html>
<html lang="en">
<head>
	<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Post</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
</head>
<body>
	@include('navigation_bar.index')

	<div class="container">
		<div class="row">
			<h1 class="text-center">Add New Post</h1>
			@include('layouts.alerts')
		</div>

	  <div class="row">
	  	<div class="col-8 offset-2">
	  		<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
	  			@csrf
	  			@method('POST')
  			  <div class="form-row">
  			    <div class="form-group col-md-6">
  			      <label for="caption">Caption</label>
  			      <input type="text" name="caption" class="form-control" id="caption" placeholder="Caption">
  			      @if ($errors->has('caption'))
			      		<strong class="alert-danger">{{ $errors->first('caption') }}</strong>
  			      @endif
  			    </div>

  			    <div class="custom-file">
  			      <input type="file" name="image" class="custom-file-input" id="image">
  			      <label class="custom-file-label" for="image">Choose image</label>
  			      @if ($errors->has('image'))
  			      	<strong class="alert-danger">{{ $errors->first('image') }}</strong>
  			      @endif
			    	</div>
  			  </div>
  			  
  			  <div class="pt-4">
  			  	<button type="submit" class="btn btn-primary btn-sm">Add New Post</button>	
  			  </div>
	  		</form>
	  	</div>
	  </div>
	</div>
</body>
</html>