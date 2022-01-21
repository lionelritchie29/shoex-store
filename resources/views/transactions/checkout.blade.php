@extends('_layout')

@section('title', 'Checkout')

@section('body')
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-2xl w-full space-y-8">
    <div>
      <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
        Checkout
      </h2>
    </div>
    <form class="mt-8 space-y-6" action="{{ route('transactions.create') }}" method="POST">
      @csrf
      <div class="rounded-md shadow-sm space-y-4">
        <div>
          <label>Address</label>
          <input name="address" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Name" />
          @error('address') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Postal Code</label>
          <input name="postal_code" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Postal Code" />
          @error('postal_code') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div>
          <label>Card Number</label>
          <input name="card_number" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Card Number">
          @error('card_number') <small class="text-red-500">{{ $message }}</small> @enderror
        </div>

        <div class="grid grid-cols-3 gap-x-3">
          <div>
            <label>MM</label>
            <input name="card_mm" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="MM">
            @error('card_mm') <small class="text-red-500">{{ $message }}</small> @enderror
          </div>

          <div>
            <label>YY</label>
            <input name="card_yy" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="YY">
            @error('card_yy') <small class="text-red-500">{{ $message }}</small> @enderror
          </div>

          <div>
            <label>CVV</label>
            <input name="card_cvv" type="text" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="CVV">
            @error('card_cvv') <small class="text-red-500">{{ $message }}</small> @enderror
          </div>
        </div>

      <div>
        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          Checkout
        </button>
      </div>
    </form>
  </div>
</div>
@endsection