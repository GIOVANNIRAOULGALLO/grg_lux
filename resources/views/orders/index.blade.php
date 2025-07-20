<x-layout>
    <x-slot name="title">GRG- I tuoi ordini</x-slot>
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
        @foreach ($orders as $order)
        <div>
            <p>Data: {{ $order->created_at->format('d/m/Y H:i') }}</p>
        </div>

        @foreach($order->products as $product)
            <div class="row">
                <div class="col-12 col-md-6 text-center text-md-end" id="sectionImg">
                    <img src="https://picsum.photos/250" alt="{{$product->name}}" id="showPicture" class="img-product-detail">
                </div>
                <div class="col-12 col-md-6 text-start" id="sectionImg">
                    <p class="card-text fw-bold text-uppercase fs-1">{{$product->brand->name ?? 'NULL'}}</p>
                    <p class="card-text">{{$product->name}}</p>
                    <p class="card-text">{{$product->description}}</p>
                    <p class="card-text">{{$product->color}}</p>
                    <p class="card-text"> Prezzo unitario€{{$product->price}}</p>
                    <p class="card-text"> Quantità: {{ $product->pivot->quantity }}</p>
                    <p class="card-text">Subtotale: €{{ number_format($product->price * $product->pivot->quantity, 2) }}</p>
                </div>
            </div>
        @endforeach        
        <p class="fs-3">Totale: €{{ number_format($order->totale)}}</p>
        <p class="fs-3 text-success">Stato: {{ $order->stato }}</p>
    
    <hr/>
@endforeach
    </section>
</x-layout>