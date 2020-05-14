<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand d-flex" href="{{ url('/') }}">
    <div>
      <img src="{{ url('img/logo/LOGO.png') }}" 
      style="height: 25px; width: 25px; border-right: 1px solid #333;" 
      class="pr-3 rounded-circle">
    </div>
    <div class="pl-3 pt-1">freeCodeGram</div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          @if(Auth::check())
          <a class="dropdown-item" href="">Profile</a>
          <a class="dropdown-item" href="{{ route('user.logout') }}">Logout</a>
          @else
          <a class="dropdown-item" href="{{ route('user.login') }}">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ route('user.register') }}">Register</a>
          @endif
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary|secondary|success|danger|warning|info|light|dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>