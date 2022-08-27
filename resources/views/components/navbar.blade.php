<!-- <header class="container-fluid  bg-black">
  <div class="row flex-row justify-content-center align-items-center ">
      <div class="col-4 login-section text-start">
        @guest
        <a class="text-white link-no-decoration mx-1" href="{{ route('login') }}">Login</a>
        <a class="text-white link-no-decoration mx-1" href="{{ route('register') }}">Register</a>
        @endguest
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-user"></i> {{Auth::user()->name}}  {{Auth::user()->surname}}
          </a>
          <ul class="dropdown-menu dropdowm-center" aria-labelledby="navbarDropdown">
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
          <a href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}" class="d-flex flex-column justify-content-center position-relative link-no-decoration"> <i class="fa-solid fa-cart-shopping text-light position-relative" >  </i><span class="circle-counter">
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
          <a href="{{route('viewBySex',[$sex ='UOMO'])}}" class="nav-link principal-link">MEN</a>
        </li>
        <li class="nav-item">
          <a href="{{route('viewBySex',[$sex = 'DONNA'])}}" class="nav-link principal-link">WOMAN</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link principal-link">HOUSE</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link principal-link">BRANDS</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>
</header> -->
<!-- <section class="container-fluid">
  <div class="row justify-content-center">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand ps-5 ps-md-0 ms-5 ms-md-0" href="#">GRG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Link
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </div>
</section> -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 order-2 order-md-0 " href="{{route('homepage')}}">GRG</a>
    <button class="navbar-toggler order-1 order-md-1 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler order-lg-2 order-1" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""><i class="fa-solid fa-cart-shopping text-light position-relative"></i></span>
    </button>
 
    <div class=" collapse navbar-collapse text-center" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link mx-2 " aria-current="page" href="#">BRANDS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('viewBySex',[$sex ='UOMO'])}}">UOMO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('viewBySex',[$sex ='DONNA'])}}">DONNA</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link mx-2" href="#">
              HOUSE
            </a>  
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 " aria-current="page" href="#">ABBIGLIAMENTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('viewBySex',[$sex ='UOMO'])}}">ACCESSORI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route('viewBySex',[$sex ='DONNA'])}}">NOVITA</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">ACCOUNT</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </li>
      </ul>
      <ul class="navbar-nav ms-auto d-none d-lg-inline-flex">
        <li class="nav-item ">
          <a class="nav-link text-light h5" href="" target="blank"><i class="fab fa-google-plus-square"></i></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light h5" href="" target="blank"><i class="fab fa-twitter"></i></a>
        </li>
        <li class="nav-item" title="Account">
          @if(Auth::user())
            <a class="nav-link text-light h5" href="" target="blank"><i class="fa-solid fa-user" ></i></a>
          @else
            <a class="nav-link text-light h5" href="" target="blank">LOGIN</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>