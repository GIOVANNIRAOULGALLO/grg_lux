<x-layout>
    <x-slot name="title">Homepage - GRG</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                <h1 class="my-3">LUXURY BECOME TRUE</h1>
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12">
                <img src="{{'/img/wardrobe.jpg'}}" alt="Homepage-GRG" class="img-fluid" style="height:400px;width:100%">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="fs-2" id="welcomeTest">DISCOVER NEW FASHION</p>
            </div>
        </div>
        <div class="row justify-content-center text-center align-items-center my-4">
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-evenly align-items-center mb-5">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 220px;height:400px">
                    <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
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