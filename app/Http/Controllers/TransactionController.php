<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create(Request $request) {
        $user = Auth::user();
        $header = TransactionHeader::create([
            'user_id' => $user->id
        ]);

        TransactionDetail::create([
            'transaction_id' => $header->id,
            'product_id' => $request->input('product_id'),
            'size' => $request->input('size'),
            'quantity' => $request->input('quantity')
        ]);

        // todo: redirect ke detail transactionnya pny dx
        return redirect()->route('home')->with('success', 'Transaction created successfully!');
    }
}
