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
            <p class="fs-2 fw-bolder text-start mt-3 describe-chart">Articoli nel mio Carrello ({{\App\Models\Product::where('buy',1)->count()}}):</p>
                <div class="col-12 col-md-6 d-flex justify-content-center flex-wrap order-1 order-lg-0">
              
                    @foreach ($products as $product)
                        <div class="card mx-3 my-2 card-checkout">
                            <a href="{{route('product.show',compact('product'))}}">
                                <img src="https://picsum.photos/250/250" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                            </a>
                            <div class="card-body">
                                <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                                <p class="card-text">{{$product->name}}</p>
                                <p class="card-text"> €{{$product->price}}</p>
                                <form action="{{route('removeToCart',compact('product'))}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn-grg-product-chart">Rimuovi dal Carrello</i></button>
                                </form>
                            </div>
                        </div>
                        @php($count+=$product->price)
                    @endforeach
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-start text-center align-items-center align-self-start mt-5">
                    <p class="fs-3 fw-bolder">Il mio Carrello({{\App\Models\Product::where('buy',1)->count()}}):</p>
                    @foreach ($products as $product)
                        <div class="d-flex justify-content-between w-50 ">
                            <span>{{$product->name}} {{$product->brand->name}}</span>
                            <span>€{{$product->price}},00</span>
                        </div>
                    @endforeach
                    <hr class="divider">
                    <span class="fs-4 fw-bold mt-3">Totale: €{{$count}}</span>
                    <a href="{{route('ship',compact('count'))}}" class="link-no-decoration"><button class="btn-checkout">Procedi al pagamento</button></a>
                </div>
            </div>
            <!-- <div class="text-center sticky-bottom">
                <p class="fs-3">Visualizza le informazioni di pagamento</p>
                <p class="fs-5">Politica dei resi</p>
                <img src="https://picsum.photos/1000/300" alt="casual image" class="img-fluid">
            </div>                   -->
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