<x-layout>
    <x-slot name="title">GRG - {{$sex}}</x-slot>
    <section class="container-fluid my-5 ">
        <div class="row justify-content-center text-center">
            
            <div class="col-12 vh-100">
                @if(!$products->isNotEmpty())
                    <p class="sex-text">Non ci sono articoli per questa categoria</p>
                @else
                <button type="submit" src="session::back()"></button>
                    <p class="sex-text">{{$products[0]->category->name}} {{$sex}}</p>
                    <div class="row flex-wrap flex-md-nowrap justify-content-between">
            <div class="col-6 col-md-3 text-start order-0 order-md-0">
                <button type="button" class="btn-filters" data-bs-toggle="modal" data-bs-target="#exampleModal">FILTRA</button>
            </div>
            
            <div class="col-12 col-md-6 text-center order-2 order-md-1">
                <p class="fs-3">
                <a class="" href="{{ url()->previous() }}">INDIETRO</a>
                </p>
            
            @if($products->count()>1)
                <span>{{$products->count()}} prodotti disponibili</span>
            @else
                <span>{{$products->count()}} prodotto disponibile</span>
            @endif
            </div>
            <div class="col-6 col-md-3 text-end order-1 order-md-2">
                <div class="dropdown me-0">
                    <button class="btn-filters dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        ORDINA
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{route('orderAscendent',compact('products'))}}">Prezzo: dal più basso</a>
                        <a class="dropdown-item" href="#">Prezzo: dal più alto</a>
                        <a class="dropdown-item" href="#">Novità</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5 pb-5">
            <div class="col-12 d-flex flex-row  flex-wrap justify-content-center">
                @foreach ($products as $product)
                <div class="card mx-3 my-3">
                    <a href="{{route('product.show',compact('product'))}}">
                        <img src="https://picsum.photos/250/350" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    </a>
                    <div class="card-body">
                        <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                        <p class="card-text">{{$product->name}}</p>
                        <p class="card-text"> €{{$product->price}},00</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
                @endif  
         
            </div>
        </div>
       
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Filtra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="filter-count-text mt-3">Filtra {{$total}} prodotti</p>
                        <div class="accordion filter-content" id="accordionFilter">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                        CATEGORIA
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse" aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body text-start">
                                        @foreach(\App\Models\Category::get() as $category)
                                               <label class="label-checkbox-filter text-uppercase">
                                                    <input type="checkbox" class="input-checkbox-filter"/> {{$category->name}}
                                                </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                        BRAND
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body text-start">
                                        @foreach(\App\Models\Product::select('brand_id')->distinct()->get() as $product)
                                            <label class="label-checkbox-filter text-uppercase">
                                                <input type="checkbox" class="input-checkbox-filter"/> {{$product->brand->name}}
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                        PREZZO
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <p class="filter-parameters-price text-uppercase">Minore di</p>
                                        <input type="range" name="price" id="priceRange" class="filter-price-range" autocomplete="off" min="0" max="5000" onchange="rangeChange()">
                                        <p id="filterPriceRange"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn-filters" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn-filters">Save</button>
                    </div>   
                </div>        
            </div>           
        </div>
    </section>
</x-layout>