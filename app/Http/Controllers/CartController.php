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
        $cartDb = Cart::orderBy('id', 'desc')->first();
        $cart = new Cart;
        $cart->user_id = 1;
        $cart->ordinal_number = $cartDb->ordinal_number+1;
        $cart->cart_status_id = 1;
        $cart->Save();
    }
    
    // Szczegoly koszyka
    public function show(Cart $cart)
    {
        return view('cart.show', [
            'cart' => $cart->load(['cartStatus', 'cartElements'])
        ]);
        
    }

    // Usuwanie koszyka
    public function remove(Cart $cart)
    {
        $cart->delete();
        $cart->save();
    }
}