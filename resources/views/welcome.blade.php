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
                <form class="d-flex" action="{{route('product.search')}}" method="GET">
                    <input class="form-control me-2" type="text" name="q">
                    <button class="btn btn-outline-success" type="submit" >Search</button>
                  </form>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12  d-flex flex-row flex-grow-5 flex-wrap justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 220px">
                    <img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    <div class="card-body">
                      <p class="card-text">{{$product->name}}</p>
                      <p class="text-secondary">{{$product->brand->name ?? 'NULL'}}</p>
                      <p class="card-text"> € {{$product->price}}</p>
                    </div>
                    <button><a href="{{route('product.show',compact('product'))}}">Details</a></button>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>