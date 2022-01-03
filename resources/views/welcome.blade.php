<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>WELCOME</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <h3><a href="{{route('product.create')}}">CREATE</a></h3>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12  d-flex flex-row justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3" style="width: 220px">
                    <img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    <div class="card-body">
                      <p class="card-text">{{$product->name}}</p>
                      <p class="card-text"> € {{$product->price}}</p>
                    </div>
                    <button><a href="{{route('product.show',compact('product'))}}">Details</a></button>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>