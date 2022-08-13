<x-layout>
    <x-slot name="title">Dettagli di {{$product->name}}</x-slot>
    <section class="container-fluid">
    <div class="row justify-content-center text-center my-2">
                <div class="col-12">
                    @if (session('message'))
                        <div class="alert alert-success mx-0">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-end">
                <p class="text-secondary text-center">Home > {{$product->category->name ?? 'NULL'}} > {{$product->name}}</p>
                <img src="https://picsum.photos/400" alt="{{$product->name}}">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-start">
                <p class="text-secondary">{{$product->brand->name ?? 'NULL'}}</p>
                <h1>{{$product->name}}</h1>
                <h3>{{$product->description}}</h3>
                <p>{{$product->price}} €</p>
                <div class="row justify-content-start align-items-center">
                    <div class="col-4 text-center">
                        <form method="POST" action="{{route('addToCart',compact('product'))}}">
                            @csrf
                            <button type ="submit" class="btn-grg my-2 ms-0">Add to cart</button>
                        </form>
                    </div>
                   
                </div>
                
            </div>
        </div>
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-6">
                <a class="btn btn-danger" href="{{route('product.edit',compact('product'))}}">EDIT</a>
            </div>
            <div class="col-12 col-md-6">
                <form action="{{route('product.destroy',compact('product'))}}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger"> DELETE</button>
                </form>
               
            </div>
        </div>
    </section>
</x-layout>