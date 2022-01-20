@extends('_layout')

@section('header', 'Home')

@section('body')
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @foreach($products as $product)
        <li class="relative">
            <a href="{{ route('products.show', ['id' => $product->id]) }}" class="border border-gray-200 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                <img src="{{ asset('storage/images/' . $product->image_path) }}" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                <span class="sr-only">View details for {{ $product->name }}</span>
                </button>
                <div class="p-2">
                    <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $product->name }}</p>
                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">Rp. {{ number_format($product->price, 2) }}</p>
                </div>
            </a>

            @if (Auth::check() && Auth::user()->role == "ADMIN")
                <div class="mt-2 flex justify-end space-x-1">
                    <a href="{{ route('products.edit', ['id' => $product->id]) }}" type="button" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </a>
                    <form action="{{ route('products.destroy', ['id' => $product->id]) }}" method="post">
                        @csrf
                        @method("delete")
                        <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Delete
                        </button>
                    </form>
                </div>
            @endif
        </li>
        @endforeach
    </ul>
@endsection