<x-layout>
    <x-slot name="title">Create Product</x-slot>
    <section class="container">
        <div class="row justify-content-center text-center my-4">
            <div class="col-12 col-md-6">
                <h1>Create</h1>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="productName" class="form-label">Nome </label>
                      <input type="text" class="form-control w-100" id="productName" name="name">
                    </div>
                    <div class="mb-3">
                      <label for="productDescription" class="form-label">Descrizione</label>
                      <textarea name="description" id="productDescription" class=" text-area-misure"></textarea>
                    </div>
                    <div class="mb-3 row justify-content-center">
                      <div class="col-12 col-md-6 text-end"> 
                        <label for="sexID" class="w-50">Sesso:</label>
                      </div>
                      <div class="col-12 col-md-6 text-start">
                        <select name="sex" id="sexId" class="w-50">
                          <option value="UOMO">UOMO</option>
                          <option value="DONNA">DONNA</option>
                        </select>
                      </div>
                    </div>
                    <div class="row justify-content-between mb-3">
                      <div class="col-12 col-md-6  text-end ">
                        <label for="categoryId" class="w-50">Categoria:</label>
                      </div>
                      <div class="col-12 col-md-6 text-start">
                        <select name="category_id" id="categoryId" class="w-50">
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <div class="col-12 col-md-6  text-end">
                        <label for="brandId" class="w-50">Brand:</label>
                      </div>
                      <div class="col-12 col-md-6  text-start">
                        <select name="brand_id" id="brandId" class="w-50">
                          @foreach ($brands as $brand)
                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Prezzo</label>
                        <input type="number" class="form-control" id="productPrice" name="price">
                    </div>
                    <button type="submit" class="btn-grg my-2">Inserisci</button>
                  </form>
            </div>
        </div>
    </section>
</x-layout>