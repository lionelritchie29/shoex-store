@extends('_layout')

@section('header', 'Home')

@section('body')
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @foreach($products as $product)
        <li class="relative">
            <a href="/" class="border border-gray-200 group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                <img src="{{ asset('storage/images/' . $product->image_path) }}" alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                <span class="sr-only">View details for {{ $product->name }}</span>
                </button>
                <div class="p-2">
                    <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">{{ $product->name }}</p>
                    <p class="block text-sm font-medium text-gray-500 pointer-events-none">Rp. {{ number_format($product->price, 2) }}</p>
                </div>
            </a>
        </li>
        @endforeach
    </ul>
@endsection