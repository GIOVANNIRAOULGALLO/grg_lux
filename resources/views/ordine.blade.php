<x-layout>
    <x-slot name="title">Ordine</x-slot>
    <section class="container-fluid h-100">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="my-5">Grazie per il tuo ordine!</h1>
                <p class="fs-4">Le invieremo una mail con tutti i dettagli</p>
                <a href="{{route('homepage')}}">
                    TORNA A TUTTI GLI ARTICOLI
                </a>
                <p>Grazie per aver acquistato da GRG</p>
                <img src="https://picsum.photos/500/300" alt="casual image" class="mb-5">
            </div>
        </div>

    </section>
</x-layout>