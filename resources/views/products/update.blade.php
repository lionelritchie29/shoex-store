@extends('_layout')

@section('title', 'Update Product')

@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-2xl w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Update Product
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="{{ route('products.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="rounded-md shadow-sm space-y-4">
        <div>
          <label>Name</label>
          <input name="name" value={{ $product->name }} type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
          @error('name') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Description</label>
          <textarea name="description" rows="5" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
            {{ trim($product->description)}}
          </textarea>
          @error('description') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Size</label>
          <input name="size" value={{ $product->size }} type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
          @error('size') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Price</label>
          <input name="price" value={{ $product->price }} type="number" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name">
          @error('price') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Brand</label>
          <select name="brand" class="w-full p-2 rounded border border-gray-200 outline-none">
            @foreach($brands as $brand)
              <option value="{{ $brand->id }}" {{$brand->id == $product->brand_id ? 'selected' : ''}}>{{ $brand->name }}</option>
            @endforeach
          </select>
          @error('brand') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>
      </div>

      <div>
        <label class="block">Image (not required)</label>
        <input type="file" name="image">
        @error('image') <small class="text-red-500">{{ $message }}</small> @enderror
      </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection