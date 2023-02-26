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
      <div class="col-3 col-md-4 d-flex flex-row align-items-center flex-nowrap">
          <a class="link-no-decoration ms-1 tc-white " data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
          <i class="fa-solid fa-bars tc-white navbargrg-link"><span class="my-auto">MENU</span></i>
          </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
          <div class="offcanvas-header">
              <p class="offcanvas-brand" id="offcanvasBottomLabel">GRG</p>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body text-center">
            <div>
              <div class="row">
                <form method="GET" action="{{route('product.search')}}" class="d-none d-md-flex">
                  <input class="form-control me-2 navbar-search" type="text" placeholder="Cerca.." aria-label="Search" autoComplete="off" name="q">
                  <button class="tc-white btn-search d-none" type="submit" name=""><i class="fa-solid fa-magnifying-glass navbargrg-link"></i></button>
                </form>
                <!-- <input type="text" id="mySearch" placeholder="Cerca.." title="" class="navbar-search"><br> -->
              </div>
              
              <p>Comincia ad acquistare...</p>
              <hr class="divider">
              <a class="link-no-decoration tc-black navbargrg-link-offcanvas w-100" href="{{route('viewBySex',[$sex ='UOMO'])}}">UOMO <i class="fa-solid fa-chevron-right"></i></a>
              <hr class="divider">
              <a class="link-no-decoration tc-black navbargrg-link-offcanvas" href="{{route('viewBySex',[$sex ='DONNA'])}}">DONNA <i class="fa-solid fa-chevron-right"></i></a>
              
              <hr class="divider">
              <a class="link-no-decoration tc-black navbargrg-link-offcanvas w-100" href="{{route('viewBySex',[$sex ='UOMO'])}}">CASA <i class="fa-solid fa-chevron-right"></i></a>
            </div>
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas" data-bs-toggle="offcanvas" href="#categoryOffcanvas" role="button" aria-controls="categoryOffcanvas">
              CATEGORIES<i class="fa-solid fa-chevron-right"></i>
            </a>
            
          </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="categoryOffcanvas" aria-labelledby="offcanvasMenuLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasBottomLabel">CATEGORIES</h5>
            <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body">
            <div>
              @foreach ($allCategories as $category)
                <p class="">{{$category->name}}</p>
                <hr class="divider">
              @endforeach
            </div>    
          </div>
        </div>
        <form method="GET" action="{{route('product.search')}}" class="d-none d-md-flex">
          <input class="form-control me-2 input-search" type="text" placeholder="Search" aria-label="Search" autoComplete="off" name="q">
          <button class="tc-white btn-search" type="submit" name=""><i class="fa-solid fa-magnifying-glass navbargrg-link"></i></button>
        </form>
      </div>
      <div class="col-9 col-md-4 text-end text-md-center">
        <div>
          <a class="link-no-decoration grg-brand" href="{{route('homepage')}}">GRG</a>
        </div> 
      </div>
      <div class="col-4  d-none d-md-flex flex-row justify-content-end align-items-center">
        <div>
          <a class="link-no-decoration tc-white " href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
              <i class="fa-solid fa-cart-shopping navbargrg-link"> </i>
            </a>
        </div>
        <span class="circle-counter">{{\App\Models\Product::where('buy',1)->count()}}</span>
        <div class="dropdown show"> 
          <a href="#" class="tc-white link-no-decoration mx-3 navbargrg-link dropdown-toggle" role="button"  id="dropdownAccountButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My GRG
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownAccountButton">
            <a class="dropdown-item" href="#">ACCOUNT</a>
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">LOGOUT</a>
            <form method="POST" action="{{route('logout')}}" id="form-logout">
              @csrf
            </form>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
          <!-- <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a></li>
            <form method="POST" action="{{route('logout')}}" id="form-logout">
              @csrf
            </form> -->
        </div>
        
        
        <div> <a href="" class="tc-white link-no-decoration mx-3"><i class="fa-solid fa-flag navbargrg-link"></i></a></div>
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