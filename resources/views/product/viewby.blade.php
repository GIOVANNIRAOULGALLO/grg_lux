<x-layout>
    <x-slot name="title">{{$sex}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 my-2">
                <h1>{{$sex}}</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12  d-flex flex-row flex-grow-5 flex-wrap justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 220px">
                    <a href="{{route('product.show',compact('product'))}}">
                        <img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    </a>
                    <div class="card-body">
                      <p class="card-text">{{$product->name}}</p>
                      <p class="text-secondary">{{$product->brand->name ?? 'NULL'}}</p>
                      <p class="card-text"> € {{$product->price}}</p>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>