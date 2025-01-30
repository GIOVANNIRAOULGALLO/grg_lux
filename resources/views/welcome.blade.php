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
            <div class="col-6 px-0">
                <div class="d-flex flex-column">
                    <div>
                        <img src=".\img\welcome_pic.jpg" alt="Welcome Pic" height="650px">
                    </div>
                    <div>
                        <p class="welcome-messagge-mini">FOLLOW THE</p>
                        <p class="welcome-messagge-mini">FLOW</p>
                    </div>
                </div>
              
            </div>
            <div class="col-6 px-0 welcome-dx">
            
              <p class="welcome-messagge">WELCOME</p>
              <p class="welcome-messagge">TO</p>
              <p class="welcome-messagge">THE FASHION</p> 
              <p class="welcome-messagge">SHOW</p>
            </div>
        </div>
        <div class="row justify-content-center text-center align-items-center bg-dark">
            <h3 class="welcome-news">{{__('ui.news')}}</h3>
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                @foreach ($products as $product)
                    <div class="card mx-2 my-2 welcome-product">
                        <a href="{{route('product.show',compact('product'))}}"><img src="https://placehold.co/300" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
                        <div class="card-body">
                            <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                            <p class="card-text">{{$product->name}}</p>
                            <p class="card-text">€{{$product->price}},00</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>