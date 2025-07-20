<nav class="bg-black sticky-top navbar-grg">
  <div class="container-fluid">
    <div class="row justify-content-center align-items-center flex-nowrap">
      <div class="col-3  d-flex flex-row align-items-center flex-nowrap">
          <a class="link-no-decoration ms-1 tc-white menu-g2r" data-bs-toggle="offcanvas" href="#offcanvasMenu" role="button" aria-controls="offcanvasMenu">
          <i class="fa-solid fa-bars tc-white navbargrg-link menu-g2r-bars"></i><span class="menu-g2r-script">MENU</span>
          </a>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
          <div class="offcanvas-header">
              <p class="offcanvas-brand" id="offcanvasBottomLabel">MENU</p>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body text-center">
            <form method="GET" action="#route('product.search')}}" class="offcanvas-search">
              <input class="form-control navbar-search" type="text" placeholder="Cerca.." aria-label="Search" autoComplete="off" name="q">
              <button class="tc-black btn-search btn-search-offcanvas" type="submit" name=""><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
            <p>Comincia ad acquistare...</p>
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas" data-bs-toggle="offcanvas" href="#categoryOffCanvasMen" role="button" aria-controls="categoryOffCanvasMen">UOMO <i class="fa-solid fa-chevron-right"></i></a>
            
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas" data-bs-toggle="offcanvas" href="#categoryOffCanvasWoman" role="button" aria-controls="categoryOffCanvasWoman">DONNA <i class="fa-solid fa-chevron-right"></i></a>
            <hr class="divider">
            <a class="link-no-decoration tc-black navbargrg-link-offcanvas w-100" href="{{route('viewBySex',[$sex ='UOMO'])}}">CASA <i class="fa-solid fa-chevron-right"></i></a>
            <hr class="divider">
            <div class="link-no-decoration tc-black navbargrg-link-offcanvas w-100">
              <div class="dropdown-item">@include('components.locale',['lang' => 'it' , 'nation' => 'it'])</div>
              <div class="dropdown-item">@include('components.locale',['lang' => 'en' , 'nation' => 'gb'])</div>
              <div class="dropdown-item">@include('components.locale',['lang' => 'es' , 'nation' => 'es'])</div>
            </div>
            
          </div>
        </div>
   
        <div class="offcanvas offcanvas-start" tabindex="-2" id="categoryOffCanvasMen">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title">UOMO-CATEGORIE</h5>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body">
            <div>
              <a class="link-no-decoration tc-red navbargrg-link-offcanvas category-description-navbar" href="{{route('viewBySex',['sex' => 'Uomo'])}}">Vedi tutto</a>
              <hr class="divider">
              @foreach ($allCategories as $category)
                <a class="link-no-decoration tc-black navbargrg-link-offcanvas" href="{{route('viewBySexCategory',['sex' => 'UOMO','category' => $category->name])}}">
                  <p class="category-description-navbar">{{$category->name}}</p>
                </a>
                <hr class="divider">
              @endforeach
            </div>    
          </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="categoryOffCanvasWoman">
          <div class="offcanvas-header">
              <h5 class="offcanvas-title">DONNA-CATEGORIE</h5>
              <button type="button" class="btnGrg" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark tc-red"></i></button>
          </div>
          <div class="offcanvas-body align-contents-center">
            <div>
             <a class="link-no-decoration tc-red navbargrg-link-offcanvas category-description-navbar" href="{{route('viewBySex',['sex' => 'DONNA'])}}">Vedi tutto</a>
              <hr class="divider">
              @foreach ($allCategories as $category)
                <a class="link-no-decoration tc-black navbargrg-link-offcanvas" href="{{route('viewBySexCategory',['sex' => 'DONNA','category' => $category->name])}}">
                  <p class="category-description-navbar">{{$category->name}}</p>
                </a>
                <hr class="divider">
              @endforeach
            </div>    
          </div>
        </div>
        <form method="GET" action="{{route('product.search')}}" class="d-none d-lg-flex">
          <input class="form-control me-4 input-search" type="text" placeholder="Search" aria-label="Search" autoComplete="off" name="q">
          <button class="tc-white btn-search" type="submit" name=""><i class="fa-solid fa-magnifying-glass navbargrg-link"></i></button>
        </form>
      </div>
      <div class="col-6 text-center">
        <div class="content-middle">
          <a class="link-no-decoration grg-brand" href="{{route('homepage')}}">
            <span class="grg-brand-content">G2R</span>
          </a>
        </div> 
      </div>
      <div class="col-3  d-flex flex-row justify-content-end align-items-center">
        <div class="d-little">
          <a class="link-no-decoration tc-white" href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
              <i class="fa-solid fa-cart-shopping navbargrg-link"> </i>
            </a>
        </div>
        @if(\App\Models\Product::where('buy',1)->count() >=1 )
        <span class="circle-counter"><p class="quantity-cart">{{\App\Models\Product::where('buy',1)->count()}}</p></span>
        @endif
        <div class="dropdown show d-none d-md-inline"> 
          <a href="#" class="tc-white link-no-decoration mx-3 navbargrg-link dropdown-toggle myg2r" role="button"  id="dropdownAccountButton"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            MY G2R
            @if(Auth::User())
            <span class="account-on"></span>
           @endif
          </a>
          <div class="dropdown-menu dropdown-login" aria-labelledby="dropdownAccountButton">
            @if(Auth::User())
            <a class="dropdown-item" href="#">ACCOUNT</a>
            <a class="dropdown-item" href="{{route('ordini')}}">ORDINI</a>
            <a class="dropdown-item" href="{{route('product.admin')}}">ADMIN</a>
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
      </div>
    </div>
  </div>
</nav>