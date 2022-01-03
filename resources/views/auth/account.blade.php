<x-layout>
    <x-slot name="title">Account di {{Auth::user()->name}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                @if (Auth::user()->profile_picture)
                    <img src="{{Storage::url(Auth::user()->profile_picture)}}" alt="{{Auth::user()->name}}" class="img-fluid rounded-circle">
                    <div class="add-image">+</div>
                @else
                    <img src="https://picsum.photos/200" alt="{{Auth::user()->name}}" class="img-fluid rounded-circle ">
                    <div class="add-image"><p class="my-1">+</p></div>
                @endif
                <h1>{{Auth::user()->name}} {{Auth::user()->surname}} </h1>
            </div>
        </div>
        <div class="row justify-content-center text-center my-5">
            <div class="col-12 col-md-6 d-block">
               <a href="" class="btn btn-alert">My Order</a>
               <a href="" class="btn btn-alert">My Info</a>
            </div>
            <div class="col-12 col-md-6 d-block">
               <a href="" class="btn btn-alert">Work with Us</a>
               <a href="" class="btn btn-alert">WishList</a>  
            </div>
        </div>
    </section>
</x-layout>