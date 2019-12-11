<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cart;
use App\OrderElement;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('order.index', [
            'orders' => Order::all()
        ]);
    }

    public function realizeOrder(Cart $cart)
    {
        return view('order.realizeOrder', [
            'cart' => $cart
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createOrder(Request $request, Cart $cart)
    {
        $data = request()->validate(
            [
            'fullName' => 'required',
            'address' => 'required',
            'phoneNumber' => 'required',
            'city' => 'required'
            ]);

        $fullName = $request->input('fullName');
        $address = $request->input('address');
        $phoneNumber = $request->input('phoneNumber');
        $city = $request->input('city');

        $cartDb = Cart::find($cart->id);

        $cartElement_group_by_restaurant = $cartDb->cartElements->groupBy('restaurant_id');
        
        $order = new Order;
        $order->delivery_address = $address;
        $order->phone_number = $phoneNumber;
        $order->cart_id = $cart->id;
        $order->order_code = $fullName;
        $order->restaurant_id = 0;//$cartDb->restaurant_id;
        $order->supplier_id = 0;
        $order->total_price = ($cartDb->cartElements->sum('price') + 9.99);
        $order->delivery_price = 9.99;
        $order->order_price = $cartDb->cartElements->sum('price');
        $order->discount_price = 0;
        $order->delivery_time = '2019-11-24 12:29:29';
        $order->order_status_id = 1;
        $order->delivery_city = $city;
        
        $order->Save();

        foreach ($cartDb->cartElements as $cartElement) 
        {
            $orderElement = new OrderElement;
            $orderElement->order_id = $order->id;
            $orderElement->cart_element_id = $cartElement->id;
            $orderElement->restaurant_id = $cartElement->restaurant_id;
            $orderElement->dishes_id = $cartElement->dishes_id;
            $orderElement->price = $cartElement->price;
            $orderElement->discount_price = 0;
            $orderElement->amount = $cartElement->amount;
            $orderElement->order_element_status_id = 1;
            $orderElement->Save();
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('order.show', [
            'order' => $order
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}