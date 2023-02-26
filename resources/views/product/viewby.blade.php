<x-layout>
    <x-slot name="title">{{$sex}}</x-slot>
    <section class="container-fluid my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p class="sex-text">COLLEZIONE {{$sex}}</p>
                @if($sex == 'UOMO')
                    <p class="description-sex-text text-uppercase">Tutto il meglio per l'uomo forte</p>
                @else
                    <p class="description-sex-text text-uppercase">L'eleganza femminile è come la pioggia</p>
                @endif
                </div>
            </div>
        </div>
        <div class="row  justify-content-between flex-nowrap bg-gold">
            <div class="col-3 text-start">
                <button type="button" class="btn-filters" data-bs-toggle="modal" data-bs-target="#exampleModal">FILTRA</button>
            </div>
            <div class="col-6 text-center">
                <p>Trovati {{$products->count()}} prodotti</p>
            </div>
            <div class="col-3 text-end">
                <div class="dropdown me-0">
                    <button class="btn-filters dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Order by
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5 pb-5">
            <div class="col-12 col-md-10  d-flex flex-row  flex-wrap justify-content-between">
                @foreach ($products as $product)
                <div class="card mx-3 my-3">
                    <a href="{{route('product.show',compact('product'))}}">
                        <img src="https://picsum.photos/250/350" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    </a>
                    <div class="card-body">
                        <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                        <p class="card-text">{{$product->name}}</p>
                        <p class="card-text"> € {{$product->price}}</p>
                    </div>
                </div>
                @endforeach
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
                        <p class="filter-count-text">Filtra {{$total}} prodotti</p>
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
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>