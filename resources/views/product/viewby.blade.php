<x-layout>
    <x-slot name="title">{{$sex}}</x-slot>
    <section class="container-fluid my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <p class="sex-text">COLLEZIONE {{$sex}}</p>
                <div class="justify-content-center">
                    @if($sex == 'UOMO')
                        <p class="description-sex-text text-uppercase">Tutto il meglio per l'uomo forte</p>
                    @else
                        <p class="description-sex-text text-uppercase">L'eleganza femminile è come la pioggia</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5 pb-5">
            <div class="col-12 col-md-2">
                <button class="btn btn-dark" id="filterButton">FILTRA</button>
                <p class="filter-count-text">Filtra {{$total}} prodotti</p>
                <div class="filter-gap" id="filterGap">
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
                                        <input type="checkbox" id="categoryCheck" name="categoryCheck" >
                                        <label for="categoryCheck">
                                            <p>{{$category->name}}</p>
                                        </label><br>
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

                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1">
                                        <p>{{$product->brand->name}}</p>
                                    </label><br>
                                    @endforeach
                                    <a href="" class="link-no-decoration">

                                    </a>
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
                                    <p>Minore di</p>
                                    <input type="range" name="price" id="price">
                                    <p id="containerPrice"></p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>     
            </div>
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

    </section>
</x-layout>