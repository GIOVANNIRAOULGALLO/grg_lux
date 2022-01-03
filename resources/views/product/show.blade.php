<x-layout>
    <x-slot name="title">Dettagli di {{$product->name}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-end">
                <img src="https://picsum.photos/400" alt="{{$product->name}}">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-start">
                <h1>{{$product->name}}</h1>
                <h3>{{$product->description}}</h3>
                <p>{{$product->price}} €</p>
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