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
                <p class="text-secondary text-show-top"><a href="{{route('viewCart',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">Carrello</a></p>
            </div>
        </div>
    
    </section>
    <section class="container vh-100">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-end" id="sectionImg">
                <img src="https://picsum.photos/300" alt="{{$product->name}}" id="showPicture" class="img-product-detail">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-center text-md-start" id="textShow">
                <p class="card-text fw-bold  text-uppercase">{{$product->brand->name ?? 'NULL'}}</p>
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
    </section>
</x-layout>