<x-layout>
    <x-slot name="title">Carrello</x-slot>
    <section class="container-fluid vh-100">
        <div class="row justify-content-center text-center">
            <div class="col-12 mx-0 px-0">
            @if (session('message'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                    <div class="messagesell">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            </div>
        </div> 
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                <h3 class="my-3">CARRELLO</h3>
            </div>
        </div>
        @if(\App\Models\Product::where('buy',1)->count()>0)
            <div class="row justify-content-center">
            @php($count=0)  
                <div class="col-12 mx-auto">   
                @foreach ($products as $product)
                    <div class="row cart-card">
                        <div class="col-3 cart-inside">
                            <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/100" class="img-fluid img-cart-inside" alt="{{$product->name}}"></a>
                        </div>
                        <div class="col-6 cart-inside">
                            <p class="cart-product-text text-uppercase">{{$product->brand->name}}</p>
                            <p class="cart-product-text">{{$product->name}}</p>
                            <p class="cart-product-text">{{$product->price}}$</p>
                        </div>
                        <div class="col-3 cart-inside">
                            <label for="qta">Q.ta: </label>
                            <input type="text" id="qta" value="1" style="width:40px">
                            <form action="{{route('removeToCart',compact('product'))}}" method="post">
                                @csrf
                                @method('post')
                                <button type="submit" class="btn" ><i class="fa-solid fa-trash mt-1 pt-1 text-danger" alt="Rimuovi dal carrello"></i></button>
                            </form>
                        </div>
                    </div>
                    @php($count+=$product->price)
                @endforeach
                </div>
                <div class="col-3 d-flex flex-column align-items-center">
                    <p class="fs-4 fw-bold mt-3">Totale: {{$count}} $</p>
                    <a href="{{route('ship',compact('count'))}}" class="link-no-decoration"><button class="btn-pay">VAI AL CHECKOUT</button></a>
                </div>
            </div>
        @else
            <div class="row justifycontent-center">
                <div class="col-12 text-center">
                    <p>Il tuo carrello è vuoto!</p>
                </div>
            </div>
        @endif

    </section>
</x-layout>