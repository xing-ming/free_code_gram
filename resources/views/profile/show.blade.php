<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <script src="{{ url('js/jquery.min.js') }}"></script>
  <script src="{{ url('js/popper.min.js') }}"></script>
  <script src="{{ url('js/bootstrap.min.js') }}"></script>
</head>
<body>
  @include('navigation_bar.index')

  <div class="container">
    <div class="row">
      <div class="col-3 p-5">
        <img src="{{ url('img/logo/LOGO.png') }}" 
        style="height: 200px; width: 200px" class="rounded-circle">
      </div>

      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-baseline">
          <h1>{{ $user->name }}</h1>
          <a href="{{ route('post.create') }}">Add New Post</a>
        </div>
        
          <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
       
          <a href="{{ route('profile.create') }}">Create Profile</a>

        <div class="d-flex">
          <div class="pr-5"> <strong>{{ $postCount }}</strong> posts</div>
          <div class="pr-5">  <strong>23k</strong> followers</div>
          <div class="pr-5"> <strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title ?? ''}}</div>
        <div>
        <p>{{ $user->profile->description ?? ''}}</p>
      </div>
      <div class="">
        <a href="https://zillasoft.com.ng">
        {{ $user->profile->url ?? ''}}
        </a>
      </div>
      </div>
    </div>

    <!-- for posts -->
    <div class="row pt-5">
      @foreach($user->posts as $post)
        <div class="col-4 pb-4">
          <a href="{{ route('post.show', $post->id) }}">
            <img src="/storage/{{ $post->image }}" class="w-100">
          </a>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>
