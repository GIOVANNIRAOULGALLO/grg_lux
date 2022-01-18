<x-layout>
    <x-slot name="title">Account di {{Auth::user()->name}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-5">
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
            <div class="col-12 col-md-6 text-center">
               <a href="#" class="btn-grg my-1" >My Order</a>
               <a href="#infoContent" class="btn-grg my-1 " id="infoButton">My Info</a>
            </div>
            <div class="col-12 col-md-6 text-center">
               <a href="#workContent" class="btn-grg my-1 " id="workButton">Work with Us</a>
               <a href="" class="btn-grg my-1 ">WishList</a>  
            </div>
        </div>
        <div class="row justify-content-center" id="accountContent">

        </div>
        <div class="row justify-content-center" id="infoContent" hidden>
            <div class="col-12 col-md-6">
                <p>Name: {{Auth::user()->name}}</p>
                <p>Surname: {{Auth::user()->surname}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
            </div>
        </div>
        <div class="row justify-content-center" id="workContent" hidden>
            <div class="col-12 col-md-6">
                <p>WOOOOOEK: {{Auth::user()->name}}</p>
                <p>Surname: {{Auth::user()->surname}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
            </div>
        </div>
    </section>
</x-layout>