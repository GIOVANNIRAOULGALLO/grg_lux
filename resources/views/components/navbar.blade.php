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



<!-- 

<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Enable both scrolling & backdrop</button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <p>Try scrolling the rest of the page to see this option in action.</p>
  </div>
</div>



 -->





<!-- <nav class="navbar navbar-expand-lg navbar-dark navbar-grg text-uppercase sticky-top">
  <div class="container container-nav">
    <a class="navbar-brand" href="{{route('homepage')}}">
      GRG
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="fa-solid fa-arrow-down">MENU</i></span>
    </button>
    <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">MENU</button>
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('viewBySex',[$sex ='UOMO'])}}">MAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{route('viewBySex',[$sex ='DONNA'])}}">WOMAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#">HOUSE</a>
        </li>
        
        <li class="nav-item dropdown">
          @if(Auth::user())
            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fw-bolder text-light">ACCOUNT</span>
            </a>
            <ul class="dropdown-menu login-dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="#">Profilo</a></li>
              <li>
                <a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>
              </li>
              <form action="{{route('logout')}}" method="post" id="form-logout">
                @csrf
              </form>
            </ul>
          @else
            <a class="nav-link text-light dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="fw-bolder">ACCOUNT</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="{{route('login')}}">LOGIN</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">CONTATTI</a></li>
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
</nav> -->








<nav class="bg-black sticky-top navbar-grg">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center">
      <div class="col-4 d-flex flex-row align-items-center">
        <a class="link-no-decoration mx-3 tc-white" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
        <p class="fs-4 pt-4">
          <i class="fa-solid fa-bars fs-5"1></i>
          MENU
        </p>
        </a>
        <div class="offcanvas offcanvas-start" tabindex="-99" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <div>
              Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
            </div>
            <div class="dropdown mt-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
                Dropdown button
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
        <form class="d-flex">
          <input class="form-control me-2 input-search" type="search" placeholder="Search" aria-label="Search" name="">
          <button class="btn tc-white" type="submit" name=""><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
      </div>
      <div class="col-4 text-center py-auto">
        <div>
          <a class="link-no-decoration grg-brand" href="{{route('homepage')}}">GRG</a>
        </div> 
      </div>
      <div class="col-4  d-flex flex-row justify-content-end">
        <div>
          <a class="link-no-decoration tc-white" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
              <i class="fa-solid fa-cart-shopping text-light"> </i>
              <span class="circle-counter">{{\App\Models\Product::where('buy',1)->count()}}</span>
            </a>
        </div>
        <div> <a href="" class="tc-white link-no-decoration mx-3">LINK</a></div>
        <div> <a href="" class="tc-white link-no-decoration mx-3">LINK</a></div>
      </div>
    </div>
    
    <!-- <div class="offcanvas offcanvas-end bg-black bg-lg-light" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title tc-white mx-auto" id="offcanvasNavbarLabel">GRG</h5>
        <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-white"></i></button>
      </div>
      <div class="offcanvas-body justify-content-between">
        <ul class="navbar-nav my-auto justify-content-end">
          <li class="nav-item tc-white">
            <a class="nav-link tc-white link-no-decoration active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link tc-white link-no-decoration" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link tc-white link-no-decoration dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
          <a class="text-light" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
              <i class="fa-solid fa-cart-shopping text-light"> </i>
              <span class="circle-counter">{{\App\Models\Product::where('buy',1)->count()}}</span>
            </a>
        <form class="d-flex my-auto" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-light" type="submit">Search</button>
        </form>
      </div>
    </div> -->
  </div>
</nav>