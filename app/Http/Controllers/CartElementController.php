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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CartElement  $cartElement
     * @return \Illuminate\Http\Response
     */
    public function edit(CartElement $cartElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CartElement  $cartElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartElement $cartElement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CartElement  $cartElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartElement $cartElement)
    {
        //
    }
}