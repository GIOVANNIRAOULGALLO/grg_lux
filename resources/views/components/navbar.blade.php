<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3 align-items-center">
  <div class="container-fluid">
    <a class="navbar-brand fs-3 order-2 order-md-0 " href="{{route('homepage')}}">GRG</a>
    <button class="navbar-toggler order-1 order-md-1 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <button class="navbar-toggler order-lg-2 order-1 pt-4 no-border" type="button" data-bs-toggle="collapse" data-bs-target="" aria-controls="" aria-expanded="false" aria-label="">
      <a href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}"><i class="fa-solid fa-cart-shopping text-light position-relative"><span class="circle-counter">
            {{\App\Models\Product::where('buy',1)->count()}}
          </span></i></a>
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
        <!-- <li class="nav-item dropdown">
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
        </li> -->
      </ul>  
      <ul class="navbar-nav ms-auto d-none d-lg-inline-flex mt-3">
        <li class="nav-item ">
          <a class="nav-link text-light h5" href="" target="blank"> <i class="fa-solid fa-magnifying-glass text-white ms-auto"></i></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light h5" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
          <i class="fa-solid fa-cart-shopping text-light position-relative" >  </i>
          <span class="circle-counter">
            {{\App\Models\Product::where('buy',1)->count()}}
          </span>
          </a>
        </li>
        <li class="nav-item" title="Account">
            <a class="nav-link text-light h5" href="" target="blank"><i class="fa-solid fa-user" ></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>