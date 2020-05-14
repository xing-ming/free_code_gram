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
      <div class="col-8">
        <img src="/storage/{{ $post->image }}" calss="w-100" >
      </div>

      <div class="col-4">
        <div>
          <div class="d-flex align-items-center">
            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle">
            <div>
              <div>
                <a href="{{ route('profile.show', $post->user->id) }}">{{ $post->user->name }}</a>
                <a href="#" class="pl-3">Follow</a>
              </div>
            </div>
          </div>

          <hr>

          <div>
            <span>
              <a href="{{ route('profile.show', $post->user->id) }}">{{ $post->user->name }}</a>
            </span>{{ $post->caption }}
          </div>
        </div>
      </div>
    </div>
	</div>{{-- container --}}
</body>
</html>