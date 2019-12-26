<?php

namespace App\Http\Controllers;

use App\CartElement;
use App\Cart;
use App\Dish;
use Illuminate\Http\Request;

class CartElementController extends Controller
{
    
    public function index()
    {
        return view('cartElement.index', [
            'cartElement' => CartElement::all()
        ]);
    }
    // Create new cart element
    public function create(Dish $dish)
    {
        
        $cart = Cart::orderBy('id', 'desc')->first();

        $cartElement = new CartElement;
        $cartElement->restaurant_id = $dish->restaurant_id;
        $cartElement->dishes_id = $dish->id;
        $cartElement->price = $dish->price;
        $cartElement->amount = 1;
        $cartElement->cart_element_status_id = 1;
        $cartElement->cart_id = $cart->id;

        $cartElement->save();
        $cart = Cart::where('Id', $cartElement->cart_id)->first();

        return view('cart.show', ['cart' => $cart]);
    }


    // Usuwanie koszyka
    public function remove(CartElement $cartElement)
    {
        $cartElement->delete();
        $cartElement->save();
        
        $cart = Cart::where('Id', $cartElement->cart_id)->first();

        return view('cart.show', ['cart' => $cart]);
        //return view('cartElement.remove');
    }

    // Dodanie ilosci
    public function addAmount(CartElement $cartElement)
    {
        $cartElement->amount = $cartElement->amount+1;
        $cartElement->price = $cartElement->price+$cartElement->price;
        $cartElement->save();

        $cart = Cart::where('Id', $cartElement->cart_id)->first();

        return view('cart.show', ['cart' => $cart]);
    }

    // usuniecie ilosci
    public function removeAmount(CartElement $cartElement)
    {
        $cart = Cart::where('Id', $cartElement->cart_id)->first();
        if (($cartElement->amount-1) <= 0)
        {            
            return view('cart.show', ['cart' => $cart]);
        }
        $cartElement->amount = $cartElement->amount-1;
        $cartElement->price = $cartElement->price - $cartElement->price;
        $cartElement->save();


        return view('cart.show', ['cart' => $cart]);
    }

}