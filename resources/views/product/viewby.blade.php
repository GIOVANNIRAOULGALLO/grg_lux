<x-layout>
    <x-slot name="title">{{$sex}}</x-slot>
    <section class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12 my-2">
                <h1>{{$sex}}</h1>
                @if($sex == 'UOMO')
                    <div class="justify-content-center">
                        <div class="col-12">
                            <p>tutto il meglio per luomo forte</p>
                        </div>
                    </div>
                @else
                <div class="justify-content-center">
                        <div class="col-12">
                            <p>L'eleganza femminile è come la pioggia</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center text-center mb-5 pb-5">
            <div class="col-12  d-flex flex-row flex-grow-5 flex-wrap justify-content-evenly">
                @foreach ($products as $product)
                <div class="card mx-3 my-3" style="width: 220px;border: 2px solid gray">
                    <a href="{{route('product.show',compact('product'))}}">
                        <img src="https://picsum.photos/200" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                    </a>
                    <div class="card-body">
                      <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                      <p class="card-text">{{$product->name}}</p>
                      <p class="text-secondary">{{$product->description ?? ''}}</p>
                      <p class="card-text"> € {{$product->price}}</p>
                    </div>
                  </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>