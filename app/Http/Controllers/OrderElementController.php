<?php

namespace App\Http\Controllers;

use App\OrderElement;
use Illuminate\Http\Request;

class OrderElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('orderElement.index', [
            'orderElement' => OrderElement::all()
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
     * @param  \App\OrderElement  $orderElement
     * @return \Illuminate\Http\Response
     */
    public function show(OrderElement $orderElement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderElement  $orderElement
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderElement $orderElement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderElement  $orderElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderElement $orderElement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderElement  $orderElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderElement $orderElement)
    {
        //
    }
}