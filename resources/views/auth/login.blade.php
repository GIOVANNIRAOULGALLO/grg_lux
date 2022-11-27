<x-layout>
    <x-slot name="title">Login</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-2">
            <div class="col-12">
                <h1 class="mt-4">Welcome back to GRG!</h1>
                <p>Inserisci le tue credenziali per accedere ai nostri servizi</p>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <p><a href="#" class="tc-black">Password dimenticata?</a></p>
                    <button type="submit" class="btn-pay mx-auto">Accedi</button>
                </form>  
            </div>
        </div>
        <hr class="divider">
        <div class="row justify-content-center">
            <div class="col-12">
                <p class="text-center my-2 fs-3">
                    Se non hai ancora un account
                </p>
                <a href="{{route('register')}}" class="link-no-decoration btn-grg-general tc-gold bg-black" style="border: 2px solid gold;">Registrati</a>
            </div>
        </div>
    </section>
</x-layout>