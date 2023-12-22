<nav class="bg-black sticky-top navbar-grg">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center flex-nowrap">
      <div class="col-3  d-flex flex-row align-items-center flex-nowrap">
          <a class="link-no-decoration ms-1 tc-white " data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
          <i class="fa-solid fa-bars tc-white navbargrg-link"><span class="my-auto">MENU</span></i>
          </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
          <div class="offcanvas-header">
              <p class="offcanvas-brand" id="offcanvasBottomLabel">GRG</p>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body text-center">
            <form method="GET" action="{{route('product.search')}}" class="offcanvas-search">
              <input class="form-control navbar-search" type="text" placeholder="Cerca.." aria-label="Search" autoComplete="off" name="q">
              <button class="tc-black btn-search" type="submit" name=""><i class="fa-solid fa-magnifying-glass "></i></button>
            </form>
                <!-- <input type="text" id="mySearch" placeholder="Cerca.." title="" class="navbar-search"><br> -->
              
            <p>Comincia ad acquistare...</p>
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas" data-bs-toggle="offcanvas" href="#categoryOffCanvasMen" role="button" aria-controls="categoryOffCanvasMen">UOMO <i class="fa-solid fa-chevron-right"></i></a>
            
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas" data-bs-toggle="offcanvas" href="#categoryOffCanvasWoman" role="button" aria-controls="categoryOffCanvasWoman">DONNA <i class="fa-solid fa-chevron-right"></i></a>
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas w-100" href="{{route('viewBySex',[$sex ='UOMO'])}}">CASA <i class="fa-solid fa-chevron-right"></i></a>
            
          </div>
        </div>
   
        <div class="offcanvas offcanvas-start" tabindex="-2" id="categoryOffCanvasMen">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title">UOMO-CATEGORIES</h5>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body">
            <div>
              <a class="link-no-decoration tc-red navbargrg-link-offcanvas" href="{{route('viewBySex',['sex' => 'Uomo'])}}">Vedi tutto</a>
              <hr class="divider">
              @foreach ($allCategories as $category)
                <a class="link-no-decoration tc-black navbargrg-link-offcanvas" href="{{route('viewBySexCategory',['sex' => 'Uomo','category' => $category])}}">
                  <p class="">{{$category->name}}</p>
                </a>
                <hr class="divider">
              @endforeach
            </div>    
          </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="categoryOffCanvasWoman">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title">DONNA-CATEGORIES</h5>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body">
            <div>
             <a class="link-no-decoration tc-red navbargrg-link-offcanvas" href="{{route('viewBySex',['sex' => 'Donna'])}}">Vedi tutto</a>
              <hr class="divider">
              @foreach ($allCategories as $category)
                <a class="link-no-decoration tc-black navbargrg-link-offcanvas" href="{{route('viewBySexCategory',['sex' => 'Donna','category' => $category])}}">
                  <p class="">{{$category->name}}</p>
                </a>
                <hr class="divider">
              @endforeach
            </div>    
          </div>
        </div>
        <form method="GET" action="{{route('product.search')}}" class="d-none d-lg-flex">
          <input class="form-control me-2 input-search" type="text" placeholder="Search" aria-label="Search" autoComplete="off" name="q">
          <button class="tc-white btn-search" type="submit" name=""><i class="fa-solid fa-magnifying-glass navbargrg-link"></i></button>
        </form>
      </div>
      <div class="col-6 text-center">
        <div>
          <a class="link-no-decoration grg-brand" href="{{route('homepage')}}">
            <span class="grg-brand-content">GRG</span>
          </a>
        </div> 
      </div>
      <div class="col-3  d-flex flex-row justify-content-end align-items-center">
        <div class="d-little">
          <a class="link-no-decoration tc-white" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
              <i class="fa-solid fa-cart-shopping navbargrg-link"> </i>
            </a>
        </div>
        <span class="circle-counter"><p class="quantity-cart">{{\App\Models\Product::where('buy',1)->count()}}</p></span>
        <div class="dropdown show d-none d-md-inline"> 
          <a href="#" class="tc-white link-no-decoration mx-3 navbargrg-link dropdown-toggle" role="button"  id="dropdownAccountButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My GRG
            @if(Auth::User())
            <span class="account-on"></span>
           @endif
          </a>
          <div class="dropdown-menu dropdown-login" aria-labelledby="dropdownAccountButton">
            @if(Auth::User())
            <a class="dropdown-item" href="#">ACCOUNT</a>
            <a class="dropdown-item" href="{{route('product.create')}}">INS. PROD.</a>
            <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">LOGOUT</a>
            <form method="POST" action="{{route('logout')}}" id="form-logout">
              @csrf
            </form>
            @else
            <a class="dropdown-item" href="{{route('login')}}">LOGIN</a>
            <a class="dropdown-item" href="{{route('register')}}">SIGN IN</a>
            @endif
          </div>
        </div>
        
        <!-- BANDIERINE -->
        <div class="dropdown"> 
          
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <div class="dropdown-item">@include('components.locale',['lang' => 'it' , 'nation' => 'it'])</div>
            <div class="dropdown-item">@include('components.locale',['lang' => 'en' , 'nation' => 'gb'])</div>
            <div class="dropdown-item">@include('components.locale',['lang' => 'es' , 'nation' => 'es'])</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>