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
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active welcome-background-1 d-flex align-items-center justify-content-center">

                        <div class="d-flex  justify-content-center align-items-center flex-column tc-black ">
                            <p class="fs-3 fs-md-1 text-center fw-bold">COMINCIANO I <span class="tc-red">SALDI</span></p>
                            <p class="text-center">Corri a vedere i nostri sconti dal 30% al 60%</p>
                            <a href="" class="button-welcome">
                                DISCOVER MORE
                            </a>
                        </div>
                        </div>
                        <div class="carousel-item welcome-background-2">
                        <div class="carousel-caption d-block tc-black ">
                            <p class="fs-1 fw-bold">COMINCIANO I <span class="tc-red">SALDI</span></p>
                            <p>Corri a vedere i nostri sconti dal 30% al 60%.</p>
                        </div>
                        </div>
                        <div class="carousel-item welcome-background-3">
                        <div class="carousel-caption d-block tc-black ">
                            <p class="fs-1 fw-bold">COMINCIANO I <span class="tc-red">SALDI</span></p>
                            <p>Corri a vedere i nostri sconti dal 30% al 60%</p>
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
        <!-- <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="fs-4" id="welcomeTest">DISCOVER NEW FASHION</p>
            </div>
        </div> -->
        <!-- <div class="row justify-content-center">
            <div class="col-12 text-center">
                <a href="#"><img src="{{'/img/welcome_2.jpg'}}" alt="FallWinter" class="img-fluid"></a>
                <p class="over-text-welcome tc-white">Fall/Winter Collection 2023</p>
            </div>
        </div> -->
        <div class="row justify-content-center text-center align-items-center my-4">
            <h3>NEWS</h3>
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                @foreach ($products as $product)
                    <div class="card mx-2 my-2 welcome-product">
                        <a href="{{route('product.show',compact('product'))}}"><img src="https://placehold.co/500" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
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