<x-layout>
    <x-slot name="title">Ship Information</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                @if (session('message'))
                <div class="alert alert-danger">
                    {{ session('message') }}
                </div>
                @endif
            </div>
        </div>
        @if(Auth::user())
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="my-3">INDIRIZZO DI SPEDIZIONE</h3>
                </div>
            </div>
            @if(Auth::user()->adresses)
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center">
                        <div class="row justify-content-center  flex-row py-2 border border-warning text-start px-5 mx-auto">
                            <div class="col-12 text-start">
                                <div><p class="fw-bold text-secondary">Città: <span class="px-1 text-dark">{{\App\Models\Adress::where('user_id',Auth::user()->id)->get()->last()->city}}</span></p></div>
                                <div><p class="fw-bold text-secondary">Indirizzo: <span class="px-1 text-dark">{{\App\Models\Adress::where('user_id',Auth::user()->id)->get()->last()->road}}</span></p></div>
                                <div><p class="fw-bold text-secondary">Civico: <span class="px-1 text-dark">{{\App\Models\Adress::where('user_id',Auth::user()->id)->get()->last()->number}}</span></p></div>
                                <div><p class="fw-bold text-secondary">CAP: <span class="px-1 text-dark">{{\App\Models\Adress::where('user_id',Auth::user()->id)->get()->last()->cap}}</span></p></div>
                                <div> <p class="fw-bold text-secondary">Nazione: <span class="px-1 text-dark">{{\App\Models\Adress::where('user_id',Auth::user()->id)->get()->last()->state}}</span></p></div>
                            </div>      
                        </div>
                        <div class="row mt-2">
                            <div class="col-12 text-center">
                                <p>Scegli la spedizione:</p>
                                <form class="text-start">
                                    <input type="radio" id="html" name="fav_language" value="HTML">
                                    <label for="html">Corriere espresso ( 5 $ - 1 gg )</label><br>
                                    <input type="radio" id="css" name="fav_language" value="CSS">
                                    <label for="css">Posta priotitaria ( 3,75 $ - 3/4 gg )</label><br>
                                    <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                                    <label for="javascript">Posta ordinaria ( 2 $ - 5/10 gg )</label>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-5">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center mt-2 mb-3">
                                <p class="fs-4">Se l'indirizzo è corretto</p>
                                <a href="{{route('stripe')}}" class="link-no-decoration"><button class="btn-add mx-auto">PROCEDI AL PAGAMENTO</button></a>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <div class="col-12 text-center mt-2 mb-3">
                                <p class="fs-4">oppure</p>
                                <a href="{{route('stripe')}}" class="link-no-decoration"><button class="btn-mod mx-auto mb-5">MODIFICA INDIRIZZO</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            <div class="row justify-content-center flex-row text-center align-items-center my-4 mx-auto">
                <div class="col-12">
                    <form method="POST" action="{{route('insertAdress',['userName'=>Auth::user()->name ?? 'user','userSurname'=>Auth::user()->surname ?? 'user'])}}">
                        @csrf
                        <div class="form-group">
                            <label for="city">Città: </label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                        <div class="form-group">
                            <label for="road">Indirizzo: </label>
                            <input type="text" class="form-control" id="road" name="road">
                        </div>
                        <div class="form-group">
                            <label for="number">Civico: </label>
                            <input type="number" class="form-control" id="number" name="number">
                        </div>
                        <div class="form-group">
                            <label for="cap">Cap: </label>
                            <input type="number" class="form-control" id="cap" name="cap">
                        </div>
                        <div class="form-group">
                            <label for="state">Stato: </label>
                            <input type="text" class="form-control" id="state" name="state">
                        </div>
                        <button type="submit">PROSEGUI</button>
                    </form>
                </div>
            </div>
            @endif
        @else
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <p class="fs-2">E' necessario effettuare l'accesso per proseguire </p>
                <a href="{{route('login')}}" class="link-no-decoration"><button class=" btn btn-add mx-auto">LOGIN</button></a>
            </div>
        </div>
        @endif
    </section>
</x-layout>