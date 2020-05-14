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
    <form action="{{ route('profile.store') }}" method="post">
      @csrf
      @method('POST')
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="title"
          value="{{ old('title') }}">
          @if ($errors->has('title'))
            <strong class="alert-danger">{{ $errors->first('title') }}</strong>
          @endif
        </div>

        <div class="form-group col-md-6">
          <label for="description">Description</label>
          <input type="text" name="description" class="form-control" id="description" 
          placeholder="description" value="{{ old('description') }}">
          @if ($errors->has('description'))
            <strong class="alert-danger">{{ $errors->first('description') }}</strong>
          @endif
        </div>

        <div class="form-group col-md-6">
          <label for="url">Url</label>
          <input type="text" name="url" class="form-control" id="url" placeholder="url"
          value="{{ old('url') }}">
          @if ($errors->has('url'))
            <strong class="alert-danger">{{ $errors->first('url') }}</strong>
          @endif
        </div>
      </div>
      
      <div class="pt-4">
        <button type="submit" class="btn btn-primary btn-sm">Save Profile</button>  
      </div>
    </form>
  </div>
</body>
</html>