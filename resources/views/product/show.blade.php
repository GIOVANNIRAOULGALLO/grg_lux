<x-layout>
    <x-slot name="title">Dettagli di {{$product->name}}</x-slot>
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
            <div class="col-12">
                <p class="text-secondary fs-5">Home > {{$product->category->name ?? 'NULL'}} > {{$product->name}}</p>
            </div>
        </div>
    
    </section>
    <section class="container vh-100">
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6 text-end" id="sectionImg">
                <img src="https://picsum.photos/400" alt="{{$product->name}}" id="showPicture">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center text-start" id="textShow">
                <p class="card-text fw-bold fs-2 text-uppercase">{{$product->brand->name ?? 'NULL'}}</p>
                <h2>{{$product->name}}</h1>
                <h5>{{$product->description}}</h3>
                <p>{{$product->price}} €</p>
                <div class="row justify-content-start align-items-center">
                    <div class="col-4 text-center">
                        <form method="POST" action="{{route('addToCart',compact('product'))}}">
                            @csrf
                            <button type ="submit" class="my-2 btn-add" id="btnAdd">Add to cart</button>
                        </form>
                    </div>
                   
                </div>
                
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