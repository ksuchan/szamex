<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    // Wyswietlenie wszystkich koszykow
    public function index()
    {
        return view('cart.index', [
            'carts' => Cart::with('cartStatus')->get()
        ]);
    }

    // Tworzenie nowego koszyka
    public function add()
    {
        return view('cart.add');
    }

    
    // Szczegoly koszyka
    public function show(Cart $cart)
    {
        return view('cart.show', [
            'cart' => $cart->load(['cartStatus', 'cartElements'])
        ]);
        
    }

    // Aktualizacja koszyka
    public function update(Request $request, Cart $cart)
    {
        //
    }

    // Usuwanie koszyka
    public function remove(Cart $cart)
    {
        $cart->delete();
        $cart->save();
    }
}