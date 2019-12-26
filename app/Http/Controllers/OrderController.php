<?php

namespace App\Http\Controllers;

use App\Order;
use App\Cart;
use App\OrderElement;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user(); 
        $userId = 0;
        if ($user != null)
            $userId = $user->id;
        return view('order.index', [
            'orders' => Order::where('user_id',$userId)->get()   ]);
    }

    public function realizeOrder(Cart $cart)
    {
        return view('order.realizeOrder', [
            'cart' => $cart
        ]);
    }

    public function createOrder(Request $request, Cart $cart)
    {
        //$input = $request->all();
        //dd($input);

        $user = auth()->user(); 
        if ($user == null)
        {            
            return view('cart.index', [
                'carts' => Cart::with('cartStatus')->where('cart_status_id', '1')->where('user_id',0)->get()]);
        }

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
        $payment = $request->input('payment');
        $delivery = $request->input('delivery');

        $now = now(); //current date/time
        $now->addHour();

        $user = auth()->user(); 

        $cartDb = Cart::find($cart->id);

        $cartElement_group_by_restaurant = $cartDb->cartElements->groupBy('restaurant_id');
        
        // ZAMÓWIENIE
        $order = new Order;
        $order->delivery_address = $address;
        $order->phone_number = $phoneNumber;
        $order->cart_id = $cart->id;
        $order->order_code = $fullName;
        $order->restaurant_id = 0;//$cartDb->restaurant_id;
        $order->supplier_id = 0;
        $order->user_id = $user->id;
        $order->total_price = ($cartDb->cartElements->sum('price') + 9.99);
        if ($delivery == 'Dostawa'){
            $order->delivery_price = 9.99;
        }
        else {
            $order->delivery_price = 0;
        }
        $order->order_price = $cartDb->cartElements->sum('price');
        $order->discount_price = 0;
        $order->delivery_time = $now;
        $order->order_status_id = 1;
        $order->delivery_city = $city;
        $order->payment = $payment;
        $order->delivery = $delivery;
        
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

        $cart->cart_status_id = 2;
        $cart->Save();

        return view('order.show', [
            'order' => $order
        ]);
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

    public function edit(Order $order)
    {
        //
    }

}