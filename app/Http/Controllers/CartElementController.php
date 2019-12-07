<?php

namespace App\Http\Controllers;

use App\CartElement;
use Illuminate\Http\Request;

class CartElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cartElement.index', [
            'cartElement' => CartElement::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    // Usuwanie koszyka
    public function remove(CartElement $cartElement)
    {
        $cartElement->delete();
        $cartElement->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CartElement  $cartElement
     * @return \Illuminate\Http\Response
     */
    public function show(CartElement $cartElement)
    {
        //
    }
    // Edycja
    public function edit(CartElement $cartElement)
    {
        //
    }

    // Dodanie ilosci
    public function addAmount(CartElement $cartElement)
    {
        $cartElement->amount = $cartElement->amount+1;
        $cartElement->save();

        //return view('cart.index');
    }

    // usuniecie ilosci
    public function removeAmount(CartElement $cartElement)
    {
        $cartElement->amount = $cartElement->amount-1;
        $cartElement->save();

        //return view('cart.index');
    }

}