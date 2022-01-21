<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index() {
        $user = Auth::user();
        $carts = Cart::where('user_id', $user->id)->get();
        $totalPrice = 0;

        foreach($carts as $cart) {
            $totalPrice += ($cart->quantity * $cart->product->price);
        }

        return view('carts.index', ['carts' => $carts, 'totalPrice' => $totalPrice]);
    }

    public function create(Request $request) {
        $user = Auth::user();

        $existingCart = Cart::where(
            ['user_id' => $user->id, 'size' => $request->input('size'), 'product_id' => $request->input('product_id')])
            ->first();

        if ($existingCart) {
            $newQty = $existingCart->quantity + $request->input('quantity');
            $existingCart = Cart::where(['user_id' => $user->id, 'product_id' => $request->input('product_id')])->update(
                ['quantity' => $newQty]
            );


            return redirect()->back()->with('success', 'Cart updated successfully');
        } else {
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $request->input('product_id'),
                'size' => $request->input('size'),
                'quantity' => $request->input('quantity')
            ]);

            return redirect()->back()->with('success', 'Product added to cart successfully');
        }
    }
}
