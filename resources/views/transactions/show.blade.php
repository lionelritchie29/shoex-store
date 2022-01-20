@extends('../_layout')

@section('header', "Transaction Detail")

@section('body')
    <div class="flex items-center">
      <div class="w-1/3">
        <img src={{ asset('storage/images/' . $transaction->product->image_path) }} alt={{ $transaction->product->name }}>
      </div>

      <div>
        <span class="block">{{ $transaction->product->brand->name }}</span>
        <h1 class="text-3xl">{{ $transaction->product->name }}</h1>
        <span class="block text-2xl font-bold mt-4">Rp. {{ number_format($transaction->product->price, 2) }}</span>

        <div class="mt-8">
          <span class="block font-medium text-lg">Size</span>
          <span class="block">{{ $transaction->size }}</span>
        </div>

        <div class="mt-8">
          <span class="block font-medium text-lg">Quantity</span>
          <span class="block">{{ $transaction->quantity }}</span>
        </div>
      </div>
    </div>
@endsection