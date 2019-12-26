<?php

namespace App\Http\Controllers;

use App\User;
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

    // Tworzenie nowego koszyka
    public function create()
    {              
        $user = auth()->user(); 
        $cartDb = Cart::orderBy('id', 'desc')->first();
        $ordinal_number = 0;
        if ($cartDb != null)
            $ordinal_number = $cartDb->ordinal_number;

        $cart = new Cart;
        $cart->user_id = $user->id;
        $cart->ordinal_number = $ordinal_number+1;
        $cart->cart_status_id = 1;
        $cart->Save();

        return view('cart.show', [
            'cart' => $cart->load(['cartStatus', 'cartElements', 'cartElements.dish'])
        ]);
    }
    
    // Szczegoly koszyka
    public function show(Cart $cart)
    {
        return view('cart.show', [
            'cart' => $cart->load(['cartStatus', 'cartElements', 'cartElements.dish'])
        ]);
        
    }

    // Usuwanie koszyka
    public function remove(Cart $cart)
    {
        $cart->delete();
        $cart->save();
        
        return view('cart.remove');
    }
}