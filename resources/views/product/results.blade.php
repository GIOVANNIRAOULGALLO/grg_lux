<x-layout>
    <x-slot name="title">Risultati per: {{$q}}</x-slot>
    <section class="container">
        
        @if($products->count()>0)
            <div class="row justify-content-center text-center">
                <div class="col-12 mt-2">
                    <h1>Risultati per: "{{$q}}"</h1>
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
        @else
            <div class="row justify-content-center text-center">
                <div class="col-12 mt-2">
                    <p class="fs-4">Nessun risultato per la tua ricerca..</p>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <p class="fs-4">I nostri migliori Brand</p>
                    @foreach($previewBrands as $brand)
                        <span class="brandsResult">{{$brand->name}}</span>  
                    @endforeach
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                    @foreach ($previewProducts as $product)
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
            
        @endif
    </section>
</x-layout>