<x-layout>
    <x-slot name="title">Edit {{$product->name}}</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-6">
                <h1>Update {{$product->name}}</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('product.update',compact('product'))}}">
                    @csrf
                    <div class="mb-3">
                      <label for="productName" class="form-label">Product Name</label>
                      <input type="text" class="form-control" id="productName" value="{{$product->name}}" name="name"  >
                    </div>
                    <div class="mb-3">
                      <label for="productDescription" class="form-label">Description</label>
                      <textarea value="{{$product->description}}" name="description" id="productDescription" cols="30" rows="10"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input type="number" class="form-control" id="productPrice" value="{{$product->price}}" name="price">
                      </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
        </div>
    </section>
</x-layout>