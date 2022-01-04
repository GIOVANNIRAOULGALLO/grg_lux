<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                <h1>LUXURY BECOME TRUE</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <h3><a href="{{route('product.create')}}">CREATE</a></h3>
               
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12  d-flex flex-row flex-grow-5 flex-wrap justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 220px">
                    <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
                    <div class="card-body">
                      <p class="card-text">{{$product->name}}</p>
                      <p class="text-secondary">{{$product->brand->name ?? 'NULL'}}</p>
                      <p class="card-text"> € {{$product->price}}</p>
                    </div>
                    <a href="#" class="btn-grg my-2">Add to cart</a>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>