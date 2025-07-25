<x-layout>
    <x-slot name="title">{{$product->name}} {{$product->brand->name}} G2R</x-slot>
    <section class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-12 mx-0 px-0">
                @if (session('message'))
                    <div x-data="{show: true}" x-init="setTimeout(() => show = false, 800)" x-show="show">
                        <div class="messagebuy">
                            {{ session('message') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row w-100">
            <div class="col-12 w-100">
                <p class="text-secondary text-show-top">HOME - {{$sex}} -  {{$product->category->name ?? 'NULL'}}</p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-md-center text-end text-md-center">
             <div class="col-12 col-md-6">
                <img src="https://picsum.photos/400" alt="{{$product->name}}" id="showPicture" class="img-product-detail">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-center text-md-start" id="textShow">
                <p class="card-text fw-bold text-uppercase fs-1">{{$product->brand->name ?? 'NULL'}}</p>
                <p class="card-text">{{$product->name}}</p>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">{{$product->color}}</p>
                <p class="fs-3">€{{$product->price}}</p>
                 <form method="POST" action="{{route('addToCart',compact('product'))}}">
                    @csrf
                <button type ="submit" class="my-2 btn-grg-general ms-auto ms-md-0" id="btnAdd">Aggiungi al carrello</button>
                </form> 
            </div>
           
        </div>    
       
        @if(Auth::user())
            @if(Auth::user()->name == 'admin')
            <form method="GET" action="{{route('product.edit',compact('product'))}}">
                @csrf
                <button type ="submit" class="my-2 btn-grg-general ms-auto ms-md-0" id="btnAdd">Edit</button>
            </form>
            @endif
        @endif
    
        @if(Auth::user())
            @if(Auth::user()->name == 'admin')
                <div class="row justify-content-center text-center my-4">
                    <div class="col-12 col-md-6">
                        <a class="btn btn-danger" href="{{route('product.edit',compact('product'))}}">EDIT</a>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="{{route('product.destroy',compact('product'))}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"> DELETE</button>
                        </form>
                    </div>
                </div>
            @endif
        @endif
        <hr class="divider">
        <div class="row mt-3">
            <p class="fs-3 text-center">Ti potrebbe anche piacere...</p>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                @foreach ($previewProducts as $product)
                    <div class="card mx-2 my-2 welcome-product">
                        <a href="{{route('product.show',compact('product'))}}"><img src="https://placehold.co/300?text=Product&font=roboto" class="card-img-top mx-auto img-fluid" alt="{{$product->name}}"></a>
                        <div class="card-body">
                            <p class="card-text fw-bold text-brand">{{$product->brand->name ?? 'NULL'}}</p>
                            <p class="card-text">{{$product->name}}</p>
                            <p class="card-text">€ {{$product->price}},00</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>