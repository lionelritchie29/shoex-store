@extends('../_layout')

@section('header', 'My Cart')

@section('body')
  @if (count($carts) == 0)
    <div>You have no item in your cart.</div>
  @else
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Product
                </th>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Base Price
                </th>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Size
                </th>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Quantity
                </th>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Sub Total
                </th>
                <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Action
                </th>
              </tr>
            </thead>
            <tbody class="text-center">
              @foreach ($carts as $idx => $cart)
                <tr >
                  <td class="w-1/6 px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    <div>
                      <div>
                        <img class="w-full" src="{{ asset('storage/images/' . $cart->product->image_path) }}" alt="">
                      </div>
                      <span class="block">{{ $cart->product->name }}</span>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Rp. {{ number_format($cart->product->price, 2) }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $cart->size }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    {{ $cart->quantity }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    Rp. {{ number_format($cart->quantity * $cart->product->price, 2) }}
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <form action="{{ route('carts.delete') }}" method="POST">
                      @csrf
                      @method('delete')
                      <input type="hidden" name="product_id" value="{{ $cart->product->id }}">
                      <input type="hidden" name="size" value="{{ $cart->size }}">
                      <button type="submit" class="inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Delete
                      </button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="text-right mt-2 mr-3 text-gray-500 font-semibold">
    Total Price: Rp. {{ number_format($totalPrice, 2) }}
    <a href="{{ route('transactions.checkout') }}" class="ml-3 inline-flex items-center px-2.5 py-1.5 border border-transparent text-xs font-medium rounded shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
      Checkout
    </a>
  </div>
  @endif
@endsection