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
        
        @if(\App\Models\Product::where('buy',1)->count()>0)
            <div class="row justify-content-center align-items-center text-center">
            @php($count=0)  
                <div class="col-12 col-md-6 d-flex justify-content-center flex-wrap order-1 order-lg-0">
                <p class="fs-2 fw-bolder text-start mt-3">Articoli nel mio Carrello ({{\App\Models\Product::where('buy',1)->count()}}):</p>
                    @foreach ($products as $product)
                        <div class="card mx-3 my-2 card-checkout">
                            <a href="{{route('product.show',compact('product'))}}">
                                <img src="https://picsum.photos/250/350" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}">
                            </a>
                            <div class="card-body">
                                <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                                <p class="card-text">{{$product->name}}</p>
                                <p class="card-text"> € {{$product->price}}</p>
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
                            <span>€{{$product->price}}</span>
                        </div>
                    @endforeach
                    <hr class="divider">
                    <span class="fs-4 fw-bold mt-3">Totale: €{{$count}}</span>
                    <a href="{{route('ship',compact('count'))}}" class="link-no-decoration"><button class="btn-checkout">Procedi al pagamento</button></a>
                </div>
            </div>
            <div class="text-center">
                <p class="fs-3">Visualizza le informazioni di pagamento</p>
                <p class="fs-5">Politica dei resi</p>
                <img src="https://picsum.photos/1000/300" alt="casual image" class="mb-5 img-fluid">
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