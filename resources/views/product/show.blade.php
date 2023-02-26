<x-layout>
    <x-slot name="title">GRG {{$product->brand->name}}-{{$product->name}}</x-slot>
    <section class="container-fluid">
        <div class="row justify-content-center text-center">
        
            <div class="col-12 mx-0 px-0">
            @if (session('message'))
                <div x-data="{show: true}" x-init="setTimeout(() => show = false, 2000)" x-show="show">
                    <div class="messagebuy">
                        {{ session('message') }}
                    </div>
                </div>
            @endif
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <p class="text-secondary text-show-top">Home > {{$product->category->name ?? 'NULL'}} > {{$product->name}}</p>
            </div>
            <div class="col-6">
              
            </div>
        </div>
    
    </section>
    <section class="container vh-100">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-end" id="sectionImg">
                <img src="https://picsum.photos/500" alt="{{$product->name}}" id="showPicture" class="img-product-detail">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-center text-md-start" id="textShow">
                <p class="card-text fw-bold text-uppercase fs-1">{{$product->brand->name ?? 'NULL'}}</p>
                <p class="card-text">{{$product->name}}</p>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">{{$product->price}} €</p>
                <form method="POST" action="{{route('addToCart',compact('product'))}}">
                    @csrf
                    <button type ="submit" class="my-2 btn-grg-general ms-auto ms-md-0" id="btnAdd">Add to cart</button>
                </form>
                <!-- <div class="row justify-content-start align-items-center">
                    <div class="col-4 text-center">
                        
                    </div>
                </div> -->
                
            </div>
        </div>
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
            @endif
            </div>
        @endif
        <div class="row">
            <p class="fs-1">Ti potrebbe anche piacere...</p>
        </div>
        <div class="row">
            <div class="col-12 d-flex flex-row flex-grow-4 flex-grow-md-5 flex-wrap justify-content-center align-items-center mb-5">
                    @foreach ($previewProducts as $product)
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