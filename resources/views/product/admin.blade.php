<x-layout>
    <x-slot name="title">Create Product</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-6">
                <h1>ADMIN PANEL</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center my-5 pb-5">
           <a href="{{route('product.admin.create')}}">INSERT PRODUCT</a>
        </div>
    </section>
</x-layout>