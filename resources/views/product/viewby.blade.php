<x-layout>
    <x-slot name="title">{{$sex}}</x-slot>
    <section class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>{{$sex}}</h1>
                @if($sex == 'UOMO')
                <div class="justify-content-center">
                    <div class="col-12">
                        <p>tutto il meglio per luomo forte</p>
                    </div>
                </div>
                @else
                <div class="justify-content-center">
                    <div class="col-12">
                        <p>L'eleganza femminile è come la pioggia</p>
                    </div>
                </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5 pb-5">
            <div class="col-3">
                <div class="filter-gap">
                    <p class="fs-5 mt-2">FILTRA</p>
                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    CATEGORIA
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body text-start">
                                @foreach(\App\Models\Category::get() as $category)
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1"> <p>{{$category->name}}</p></label><br>
                                    <a href="" class="link-no-decoration">
                                        
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    BRAND
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body text-start">
                                    @foreach(\App\Models\Brand::get() as $brand)
                                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                    <label for="vehicle1"> <p>{{$brand->name}}</p></label><br>
                                    <a href="" class="link-no-decoration">
                                        
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    PREZZO
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <p>
                                        <label>Price From:</label>
                                        <input type="range" id="fromPrice" value="50" min="0" max="500" oninput="document.getElementById('fPrice').innerHTML = this.value" />
                                        <label id="fPrice"></label>
                                    </p>
                                    <p>
                                        <label>Price To:</label>
                                        <input type="range" id="toPrice" value="450" min="0" max="500" oninput="document.getElementById('tPrice').innerHTML = this.value" />
                                        <label id="tPrice"></label>
                                    </p>
                                    <p><input type="submit" value="submit" onclick="ti()" /></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-9  d-flex flex-row flex-grow-5 flex-wrap justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 200px;">
                    <a href="{{route('product.show',compact('product'))}}">
                        <img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
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