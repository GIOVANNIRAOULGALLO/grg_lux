<x-layout>
    <x-slot name="title">Carrello</x-slot>
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
                <h1 class="my-3">CARRELLO</h1>
            </div>
        </div>
        @if(\App\Models\Product::where('buy',1)->count()>0)
        <div class="row  justify-content-center align-items-center text-center my-2">
            @php($count=0)
            
            <div class="col-12 d-flex flex-column justify-content-center text-center">
                
                @foreach ($products as $product)
                   
                                <div class="card mb-3 text-center d-flex flex-row justify-content-center align-items-center" style="height:100px;width:300px;font-size:12px">
                                    <a href="{{route('product.show',compact('product'))}}"><img src="https://picsum.photos/50" class="img-fluid my-2 mx-3" alt="{{$product->name}}"></a>
                                    <div class="card-body my-auto">
                                        <h5 class="card-title text-secondary">{{$product->brand->name}}</h5>
                                        <p class="card-text">{{$product->name}}</p>
                                        <p class="card-text">{{$product->price}}$</p>
                                    </div>
                                    <form action="{{route('removeToCart',compact('product'))}}" method="post">
                                        @csrf
                                        @method('post')
                                        <button type="submit" class="btn btn-danger mx-5"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                </div>
                    @php($count+=$product->price)
                @endforeach
                <h3>Totale: {{$count}} $</h3>
                <a href="{{route('stripe',compact('count'))}}"><button class="btn btn-success">PAGA</button></a>
            </div>
               
        </div>
        @else
            <div class="row justifycontent-center">
                <div class="col-12 text-center">
                    <h3>Nessun Prodotto</h3>
                </div>
            </div>

        @endif

    </section>
</x-layout>