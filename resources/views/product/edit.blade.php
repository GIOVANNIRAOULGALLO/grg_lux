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
                      <input type="text" class="form-control" id="productDescription" value="{{$product->description}}" name="description">
                    </div>
                    <div class="mb-3">
                      <label for="productCategory" class="form-label">Category</label>
                        <select name="category_id" id="productCategory" class="w-50" value="{{$product->category_id}}">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
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