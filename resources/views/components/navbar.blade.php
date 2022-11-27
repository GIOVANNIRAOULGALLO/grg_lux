<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 align-items-center">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 order-2 order-md-0 logo-shadow" href="{{route('homepage')}}">GRG</a>
    <button class="navbar-toggler order-1 order-md-1 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler order-lg-2 order-1 pt-4 no-border" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" aria-label="">
      <a href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
        <i class="fa-solid fa-cart-shopping text-light position-relative">
          <span class="circle-counter">{{\App\Models\Product::where('buy',1)->count()}}</span>
        </i>
      </a>
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
          <a class="nav-link mx-2" href="#">HOUSE</a>  
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 " aria-current="page" href="#">ABBIGLIAMENTO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="">ACCESSORI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="">NOVITA</a>
        </li> -->
        <!-- 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          @if(Auth::user())
          <span class="fw-bolder text-light">
            {{Auth::user()->name}}
          </span>
          </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
        </ul>
        @else
        <span>ACCOUNT</span>
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
        <li><a class="dropdown-item" href="{{route('register')}}">REGISTER</a></li>
        </ul>
        @endif
        </a>
        </li>
      
     
      
      
      
      -->
      <!-- </ul>
      <ul class="navbar-nav ms-auto d-none d-lg-inline-flex mt-3">
        <li class="nav-item ">
          <a class="nav-link text-light h5" href="" target="blank"> <i class="fa-solid fa-magnifying-glass text-white ms-auto"></i></a>
        </li>
        
        <li class="nav-item " title="Account">
          <i class="fa-solid fa-user dropbtn"></i><p>Login</p>
          <div class="dropdown">
            <div class="dropdown-content">
              <a href="#">Link 1</a>
              <a href="#">Link 2</a>
              <a href="#">Link 3</a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark navbar-grg text-uppercase sticky-top">
  <div class="container container-nav">
    <a class="navbar-brand" href="{{route('homepage')}}">
      GRG
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-arrow-down">MENU</i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link" href="{{route('viewBySex',[$sex ='UOMO'])}}">MAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('viewBySex',[$sex ='DONNA'])}}">WOMAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">HOUSE</a>
        </li>
        
        <li class="nav-item dropdown">
          @if(Auth::user())
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fw-bolder text-light">ACCOUNT</span>
            </a>
            <ul class="dropdown-menu login-dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li>
                <a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
              </li>
              <form action="{{route('logout')}}" method="post" id="form-logout">
                @csrf
              </form>
            </ul>
          @else
            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fw-bolder text-light">Login</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">REGISTER</a></li>
            </ul>
          @endif
        </li>
        <li class="nav-item">
        <form class="form-inline">
          <div class="input-group search-box">
            <input type="text" class="form-control" placeholder="What are you looking for?" aria-label="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button"><i class="fa-solid fa-magnifying-glass"></i></button>
            </span>
          </div>
        </form>
      </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
            <i class="fa-solid fa-cart-shopping text-light cart-icon"> </i>
            <span class="circle-counter">{{\App\Models\Product::where('buy',1)->count()}}</span>
          </a>
        </li>
      </ul>

      



    </div>
  </div>
</nav>