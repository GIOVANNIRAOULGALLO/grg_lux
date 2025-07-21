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
    </section>
    <section class="container vh-100">  
        @if(\App\Models\Product::where('buy',1)->count()>0)
            <div class="row justify-content-center align-items-center text-center">
            @php($count=0)
                <div class="col-12 col-md-5 order-1 order-lg-0">
                    <p class="fs-2 fw-bolder">Articoli nel mio Carrello ({{\App\Models\Product::where('buy',1)->count()}}):</p>
                    <div class="row">
                        <div class="col-12 d-flex flex-nowrap text-center justify-content-center">
                            @foreach ($products as $product)
                                <div class="card mx-3 my-2">
                                    <a href="{{route('product.show',compact('product'))}}">
                                        <img src="https://picsum.photos/70/70" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                                    </a>
                                    <div class="card-body">
                                        <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                                        <p class="card-text">{{$product->name}}</p>
                                        <p class="card-text"> €{{$product->price}}</p>
                                        <label for="quantity">Quantità:</label>
                                        <input type="number" name="quantity" value="1" min="1" max="{{$product->quantity}}" class="form-control mb-2" style="width: 80px; display:inline-block;">
                                        <form action="{{route('removeToCart',compact('product'))}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn-grg-product-chart">Rimuovi dal Carrello</i></button>
                                        </form>
                                    </div>
                                </div>
                            @php($count+=$product->price)
                            @endforeach
                        </div>
                    </div>
                </div> 
                <div class="col-12 col-md-2"> 
                    <div class="dividerVertical"> </div>
                </div>
                <div class="col-12 col-md-5 sticky-top">
                    <p class="fs-3 mt-5 fw-bolder no-scroll">Articoli nel carrello: ({{\App\Models\Product::where('buy',1)->count()}}):</p>
                    @foreach ($products as $product)
                        <div class="d-flex py-2">
                            <div class="p-2"><img src="https://picsum.photos/25/25" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></div>
                            <div class="p-2"><p>{{$product->name}} {{$product->brand->name}}</p></div>
                            <div class="p-2"><p> - </p></div>
                            <div class="ml-auto p-2"><p>€{{$product->price}},00</p></div>
                            <div class="p-2"><p></p></div>
                            
                        </div>
                    @endforeach
                    <hr class="divider">
                    <span class="fs-4 fw-bold mt-3">Totale: €{{$count}},00 </span>
                    <a href="{{route('ship',compact('count'))}}" class="link-no-decoration"><button class="btn-checkout">Procedi al pagamento</button></a>
                </div>
            </div>
        @else
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h1 class="mt-4">Il tuo carrello è vuoto!</h1>
                    
                    <button class="my-2 btn-grg-general mx-auto" id="btnAdd"><a href="{{route('homepage')}}" class="link-no-decoration tc-black">CONTINUA AD ACQUISTARE</a>
                    </button>
                    <div>
                        <p class="fs-5">oppure </p>
                        <p class="fs-3">Guarda la nostra SS25</p>
                        <img src="https://picsum.photos/1000/300" alt="casual image" class="mb-5 img-fluid">
                    </div>
                    
                </div>
            </div>
        @endif

    </section>
</x-layout>