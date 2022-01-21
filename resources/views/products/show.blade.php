@extends('_layout')

@section('header', "Product Detail")

@section('body')
    <div class="flex">
      <div class="w-1/2">
        <img src={{ asset('storage/images/' . $product->image_path) }} alt={{ $product->name }}>
      </div>

      <form class="w-1/2" method="POST" action="{{ route('carts.create') }}">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        <span class="block">{{ $product->brand->name }}</span>
        <h1 class="text-3xl">{{ $product->name }}</h1>
        <span class="block text-2xl font-bold mt-4">Rp. {{ number_format($product->price, 2) }}</span>

        <div class="mt-8">
          <p class="text-gray-600">{{ $product->description }}</p>
        </div>

        <div class="mt-8">
          <span class="block">Size</span>
          <select name="size" class="w-full p-2 rounded border border-gray-200 outline-none">
            @foreach(explode(",", $product->size) as $size)
              <option >{{ $size }}</option>
            @endforeach
          </select>
        </div>

        <div class="mt-8">
          <span class="block">Quantity</span>
          <input class="border border-gray-200 p-2 w-full rounded outline-none" min="1" type="number" name="quantity" value="1">
        </div>

        @if (Auth::check() && Auth::user()->role == "MEMBER")
        <div class="mt-8">
          <button type="submit" class="w-full justify-center inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Add to cart
          </button>
        </div>
        @endif
      </form>
    </div>
@endsection