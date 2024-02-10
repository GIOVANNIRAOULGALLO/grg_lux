<x-layout>
    <x-slot name="title">GRG - Homepage</x-slot>
    <section class="container-fluid overflow-hidden">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-danger">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="row justify-content-center mt-0">
            <div class="col-12 px-0">
              <img src=".\img\welcome_pic.jpg" alt="Welcome Pic" class="img-fluid w-100">
              <p class="welcome-messagge">{{__('ui.welcome')}}</p>
            </div>
        </div>
        <div class="row justify-content-center text-center align-items-center mb-4">
            <h3 class="welcome-news">{{__('ui.news')}}</h3>
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                @foreach ($products as $product)
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
    </section>
</x-layout>