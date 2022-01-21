@extends('../_layout')

@section('header', 'Transaction History')

@section('body')
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  No
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Address
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Postal Code
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Card Number
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                  Date
                </th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transactions as $transaction)
                <tr class="{{ $loop->index == 0 ? 'bg-white' : 'bg-gray-50' }}" >
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                    <a href="{{ route('transactions.show', ['id' => $transaction->id]) }}">
                      {{ $loop->index + 1 }}
                    </a> 
                  </td> 
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{ route('transactions.show', ['id' => $transaction->id]) }}">
                      {{ $transaction->address }}
                    </a> 
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{ route('transactions.show', ['id' => $transaction->id]) }}">
                      {{ $transaction->postal_code }}
                    </a> 
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{ route('transactions.show', ['id' => $transaction->id]) }}">
                      {{ $transaction->card_number }}
                    </a> 
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                    <a href="{{ route('transactions.show', ['id' => $transaction->id]) }}">
                      {{ date('d-m-Y', strtotime($transaction->created_at)) }}
                    </a> 
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection