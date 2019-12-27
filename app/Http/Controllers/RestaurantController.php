<?php

namespace App\Http\Controllers;

use App\Restaurant;
use App\Order;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('restaurant.index', [
            'restaurants' => Restaurant::with('dishes', 'openingHours')->get()
        ]);
    }

    public function realize()
    {
        $user = auth()->user(); 
        //dd($user);
        // Dodatkowo sprawdzic czy to jest restauracja
        return view('restaurant.realize', [
            'orders' => Order::where('order_status_id',1)->orWhere('order_status_id',2)->get()   ]);
    }

    public function details(Order $order)
    {
        return view('restaurant.details', [
            'order' => $order   ]);        
    }

    // Odrzucenie zamówienia
    public function discard(Order $order)
    {
        $order->order_status_id = 4;
        $order->Save();
        return view('restaurant.realize', [
            'orders' => Order::where('order_status_id',1)->orWhere('order_status_id',2)->get()   ]);
    }

    // Wydanie zamówienia
    public function release(Order $order)
    {
        $order->order_status_id = 3;
        $order->Save();
        return view('restaurant.realize', [
            'orders' => Order::where('order_status_id',1)->orWhere('order_status_id',2)->get()   ]);
    }

    // Pobranie(akceptacja) zamówienia
    public function get(Order $order)
    {
        $order->order_status_id = 2;
        $order->Save();
        
        return view('restaurant.details', [
            'order' => $order   ]);
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
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        return view('restaurant.show', [
            'restaurant' => $restaurant->load(['openingHours', 'dishes'])
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurant $restaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        //
    }
}
