<header class="container-fluid  bg-black">
  <div class="row flex-row justify-content-center align-items-center ">
      <div class="col-4 login-section text-start h-100">
        @guest
        <a class="text-white link-no-decoration mx-1" href="{{ route('login') }}">Login</a>
        <a class="text-white link-no-decoration mx-1" href="{{ route('register') }}">Register</a>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i> {{Auth::user()->name}}  {{Auth::user()->surname}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{route('account.display',['user'=>Auth::user()])}}">Account</a></li>
            <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a></li>
            <form method="post" action="{{route('logout')}}" id="form-logout">
              @csrf
            </form>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">OTHER</a></li>
          </ul>
        </li>
        @endauth
      </div>
      <div class="col-4 logo-section text-center mx-auto">
        <a href="{{route('homepage')}}" class="brand-grg">GRG</a>
      </div>
      <div class="col-4 ssearch-section text-end d-flex justify-content-end align-items-center">
        <form class="d-flex" action="{{route('product.search')}}" method="GET">
        <input class="form-control ms-auto  bg-transparent text-white input-search" type="text" name="q" >
        <button class="btn button-search " type="submit" id="buttonSearch"> <i class="fa-solid fa-magnifying-glass text-white ms-auto"></i></button>
        </form>
        <div class="d-flex mx-4 ">
          <a href="{{route('viewCart')}}" class="d-flex flex-column justify-content-center position-relative"> <i class="fa-solid fa-cart-shopping text-light position-relative">  </i><span class="position-absolute top-0 start-100 d-flex justify-content-center align-items-center  mx-auto translate-middle badge rounded-circle bg-danger">
            {{\App\Models\Product::where('buy',1)->count()}}
           </span></a>
        </div>
      </div>
     
     
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-grg">
    <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center text-md">
        <li class="nav-item">
          <a href="{{route('viewBySex',[$sex ='UOMO'])}}" class="nav-link">MEN</a>
        </li>

        <li class="nav-item">
          <a href="{{route('viewBySex',[$sex = 'DONNA'])}}" class="nav-link">WOMAN</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">BRANDS</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</header>