<x-layout>
    <x-slot name="title">GRG - Homepage</x-slot>
    <section class="container-fluid overflow-hidden">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <!-- <h1 class="my-3">LUXURY BECOME TRUE</h1> -->
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mb-5 mt-0">
            <div class="col-12 px-0 mt-0">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active welcome-background">
                            <img src=".\img\money.jpg" alt="">
                            <div class="welcome-saldi">
                                <p class="fs-1 fs-md-1 text-center fw-bold">TEMPO DI <span class="tc-red">SALDI</span></p>
                                <p class="text-center">{{ __('ui.welcome')}}Corri a vedere i nostri sconti dal 30% al 60%</p>
                                <a href="" class="button-welcome">
                                    SCOPRI DI PIU
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item welcome-background">
                            <img src=".\img\money.jpg" alt="">
                            <div class="d-flex  justify-content-center align-items-center flex-column tc-black carousel-welcome">
                                <p class="fs-1 fs-md-1 text-center fw-bold">COMINCIANO I <span class="tc-red">SALDI</span></p>
                                <p class="text-center">Corri a vedere i nostri sconti dal 30% al 60%</p>
                                <a href="" class="button-welcome">
                                    SCOPRI DI PIU
                                </a>
                            </div>
                        </div>
                        <div class="carousel-item welcome-background align-self-center">
                            <img src=".\img\money.jpg" alt="">
                            <div class="d-flex justify-content-center align-items-center flex-column tc-black carousel-welcome">
                                <p class="fs-1 fs-md-1 text-center fw-bold">COMINCIANO I <span class="tc-red">SALDI</span></p>
                                <p class="text-center">Corri a vedere i nostri sconti dal 30% al 60%</p>
                                <a href="" class="button-welcome">SCOPRI DI PIU</a>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center align-items-center my-4">
            <h3>NEWS</h3>
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                @foreach ($products as $product)
                    <div class="card mx-2 my-2 welcome-product">
                        <a href="{{route('product.show',compact('product'))}}"><img src="https://placehold.co/300" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
                        <div class="card-body">
                            <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                            <p class="card-text">{{$product->name}}</p>
                            <p class="card-text">€ {{$product->price}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>