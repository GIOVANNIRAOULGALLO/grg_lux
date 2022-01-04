<nav class="navbar navbar-expand-lg navbar-grg">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('homepage')}}">GRG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        @guest
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
          
        @endguest
        @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome,{{ Auth::user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('account.display',['user'=>Auth::user()])}}">Account</a></li>
              <li><a  class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a></li>
              <form method="post" action="{{route('logout')}}" id="form-logout">
                @csrf
              </form>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        @endauth
        <li class="nav-item">
          <form class="d-flex" action="{{route('product.search')}}" method="GET">
            <input class="form-control me-2" type="text" name="q">
            <button class="btn btn-outline-success" type="submit" >Search</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
