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
        <img src="{{ url('img/logo/LOGO.png') }}" style="height: 200px; width: 200px" class="rounded-circle">
      </div>

      <div class="col-9 pt-5">
        <div><h1>freeCodeGram</h1></div>
        <div class="d-flex">
          <div class="pr-5"> <strong>153</strong> posts</div>
          <div class="pr-5">  <strong>23k</strong> followers</div>
          <div class="pr-5"> <strong>212</strong> following</div>
        </div>
        <div class="pt-4 font-weight-bold">zillasoft.com.ng</div>
        <div>
        we produce or software with latest technology with high level tech engineer
        we provide compassion plan for our client
      </div>
      <div class=""><a href="https://zillasoft.com.ng">www.zillasoft.com.ng</a></div>
      </div>
    </div>

    <!-- for posts -->
    <div class="row pt-5">
      <div class="col-4">
        <img src="{{ url('img/cloude_storage.jpg') }}" class="w-100">
      </div>
      <div class="col-4">
        <img src="{{ url('img/cloude_storage.jpg') }}" class="w-100">
      </div>
      <div class="col-4">
        <img src="{{ url('img/cloude_storage.jpg') }}" class="w-100">
      </div>
    </div>
  </div>
</body>
</html>