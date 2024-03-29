<x-layout>
    <x-slot name="title">Register</x-slot>
    <section class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1>Register</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center my-5 pb-5">
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSurname" class="form-label">Surname</label>
                        <input type="text" class="form-control" id="exampleInputSurname" name="surname">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email </label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputTelephone1" class="form-label">Phone </label>
                        <input type="number" class="form-control" id="exampleInputTelephone1" name="telephone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPasswordConfirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn-grg">Registrati</button>
                </form>
            </div>
        </div>
    </section>
</x-layout>