<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function create(Request $request) {
        $request->validate([
            'address' => 'required',
            'postal_code' => 'required|numeric',
            'card_yy' => 'required|numeric|between:2021,2050',
            'card_mm' => 'required|numeric|between:1,12',
            'card_cvv' => 'required|numeric',
            'card_number' => 'required'
        ]);

        $user = Auth::user();
        $header = TransactionHeader::create([
            'user_id' => $user->id,
            'address' => $request->input('address'),
            'postal_code' => $request->input('postal_code'),
            'card_mm' => $request->input('card_mm'),
            'card_yy' => $request->input('card_yy'),
            'card_cvv' => $request->input('card_cvv'),
            'card_number' => $request->input('card_number')
        ]);

        $carts = Cart::where('user_id', $user->id)->get();

        foreach($carts as $cart) {
            TransactionDetail::create([
                'transaction_id' => $header->id,
                'product_id' => $cart->product->id,
                'size' => $cart->size,
                'quantity' => $cart->quantity
            ]);
        }

        Cart::where('user_id', $user->id)->delete();
        return redirect()->route('transactions.list')->with('success', 'Transaction created successfully!');
    }

    public function index() {
        $transactions = TransactionHeader::where('user_id', Auth::id())->get();
        return view('transactions.list')->with('transactions', $transactions);
    }

    public function show($id){
        $detailTransactions = TransactionDetail::where('transaction_id', $id)->get();
        return view('transactions.show')->with('detailTransactions', $detailTransactions);
    }

    public function checkout() {
        $user = Auth::user(); 
        $carts = Cart::where('user_id', $user->id)->get();
        if (count($carts) == 0) return redirect()->route('carts.index');
        return view('transactions.checkout');
    }
}
