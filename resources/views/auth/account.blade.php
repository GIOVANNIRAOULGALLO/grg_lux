<x-layout>
    <x-slot name="title">Account di {{Auth::user()->name}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-5">
            <div class="col-12 text-center">
                @if (Auth::user()->profile_picture)
                    <img src="{{Storage::url(Auth::user()->profile_picture)}}" alt="{{Auth::user()->name}}" class="img-fluid rounded-circle">
                    <div class="add-image">+</div>
                @else
                    <img src="https://picsum.photos/200" alt="{{Auth::user()->name}}" class="img-fluid rounded-circle ">
                    <div class="add-image"><p class="my-1">+</p></div>
                @endif
                <h1>{{Auth::user()->name}} {{Auth::user()->surname}} </h1>
                <div class="border border-dark w-25 mx-auto d-flex align-items-center justify-content-center my-2 insert-button">
                    <h3><a href="{{route('product.create')}}" class="link-no-decoration my-auto text-black">Inserisci Annuncio</a></h3>
                </div>
              
            </div>
        </div>
        <div class="row justify-content-center text-center my-5">
            <div class="col-12 col-md-3 text-center">
               <a href="#" class="btn-grg my-1" >My Order</a>
            </div>
            <div class="col-12 col-md-3 text-center">
               <a href="#infoContent" class="btn-grg my-1 " id="infoButton">My Info</a>
            </div>
            <div class="col-12 col-md-3 text-center">
               <a href="#workContent" class="btn-grg my-1 " id="workButton">Work with Us</a>
            </div>
            <div class="col-12 col-md-3 text-center">
               <a href="" class="btn-grg my-1 ">WishList</a>  
             </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6" id="infoContent" hidden>
                <p>Name: {{Auth::user()->name}}</p>
                <p>Surname: {{Auth::user()->surname}}</p>
                <p>Phone: {{Auth::user()->telephone}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
            </div>
            <div class="col-12 col-md-6 text-center" id="workContent" hidden>
                <p>WOOOOOEK: {{Auth::user()->name}}</p>
                <p>Surname: {{Auth::user()->surname}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
            </div>
        </div>
    </section>
</x-layout>