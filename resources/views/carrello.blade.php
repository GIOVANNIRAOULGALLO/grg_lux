<x-layout>
    <x-slot name="title">GRG-Carrello</x-slot>
    <section class="container-fluid">
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
            <div class="row justify-content-center text-center align-items-center">
            @php($count=0)  
                <div class="col-12 text-center ">   
                @foreach ($products as $product)
                    <div class="row cart-product text-center justify-content-center">
                        <div class="col-6 my-2  align-items-center justify-content-center">
                            <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/100" class="img-fluid img-cart-inside" alt="{{$product->name}}"></a>
                        </div>
                        <div class="col-6">
                                    <p class="cart-product-text text-uppercase">{{$product->brand->name}}</p>
                                    <p class="cart-product-text">{{$product->name}}</p>
                                    <label for="qta" class="text-end">Q.ta: </label>
                                    <input type="text" id="qta" value="1" style="width:40px" class="text-end">
                                    <form action="{{route('removeToCart',compact('product'))}}" method="post">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn" ><i class="fa-solid fa-trash mt-1 pt-1 text-danger" alt="Rimuovi dal carrello"></i></button>
                                    </form>
                                    <p class="cart-product-text">{{$product->price}}$</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    @php($count+=$product->price)
                @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-12  d-flex flex-column align-items-center justify-content-center">
                    <p class="fs-4 fw-bold mt-3">Totale: {{$count}} $</p>
                    <a href="{{route('ship',compact('count'))}}" class="link-no-decoration"><button class="btn-pay">VAI AL CHECKOUT</button></a>
                </div>
            </div>    
                
        @else
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <p>Il tuo carrello è vuoto!</p>
                    <p><a href="">CONTINUA AD ACQUISTARE</a></p>
                    <div class="d-flex flex-row flex-wrap justify-content-center">
                        @foreach(\App\Models\Product::all()->take(8) as $product)
                            <div class="card mx-3 my-3">
                                <a href="{{route('product.show',compact('product'))}}">
                                    <img src="https://picsum.photos/250/350" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                                </a>
                                <div class="card-body">
                                    <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                                    <p class="card-text">{{$product->name}}</p>
                                    <p class="card-text"> € {{$product->price}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <p class="fs-5">oppure </p>
                        <p class="fs-3">guarda la nostra ss23</p>
                        <img src="https://picsum.photos/1000/300" alt="casual image" class="mb-5 img-fluid">
                    </div>
                    
                </div>
            </div>
        @endif

    </section>
</x-layout>