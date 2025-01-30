<x-layout>
    <x-slot name="title">Admin Panel</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-6">
                <h1>ADMIN PANEL</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center my-5 pb-5">
            <div class="col-12">
                <button class="btn-grg-general"><a href="{{route('product.admin.create')}}" class="link-no-decoration">INSERT PRODUCT</a></button>
            </div>
        </div>
    </section>
</x-layout>