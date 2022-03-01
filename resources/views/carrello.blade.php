<x-layout>
    <x-slot name="title">Homepage</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                <h1 class="my-3">CARRELLO</h1>
            </div>
        </div>
        <div class="row  justify-content-center  align-items-center my-2">
            @php($count=0)
            
            <div class="col-12 col-md-6 me-0">
                
                @foreach ($products as $product)
                    <div class="card mb-3 text-center">
                        <div class="row  justify-content-center">
                            <div class="col-md-4">
                                <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/100" class="img-fluid my-2" alt="{{$product->name}}"></a>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-secondary">{{$product->brand->name}}</h5>
                                    <p class="card-text">{{$product->name}}</p>
                                    <p class="card-text">{{$product->price}}$</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @php($count+=$product->price)
                @endforeach
            </div>
            <div class="col-12 col-md-6 text-center">
                <h3>Totale: {{$count}} $</h3>
            </div>
        </div>
    </section>
</x-layout>