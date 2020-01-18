<?php

namespace App\Http\Controllers;

use App\Cart;
use App\CartElement;
use App\Order;
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
    // Realizacja zamówienia z koszyka
    public function realizeOrder(Cart $cart)
    {
        return view('order.realizeOrder', [
            'cart' => $cart
        ]);
    }

    // Tworzenie zamówienia
    public function createOrder(Request $request, Cart $cart)
    {
        $user = auth()->user(); 
        $userId = 0;
        if ($user != null)
            $userId = $user->id;

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

        $now = now(); 
        $now->addHour();
        $user = auth()->user(); 
        $cartDb = Cart::find($cart->id);
        $cartElement_group_by_restaurant = $cartDb->cartElements->groupBy('restaurant_id');
        
        foreach($cartElement_group_by_restaurant as $cartElement_group)
        {            
            $id = $cartElement_group->first()->id;
            $cartElementDb = CartElement::find($id);

            // ZAMÓWIENIE
            $order = new Order;
            $order->delivery_address = $address;
            $order->phone_number = $phoneNumber;
            $order->cart_id = $cart->id;
            $order->order_code = $fullName;
            $order->restaurant_id = $cartElementDb->restaurant_id;
            $order->supplier_id = 0;
            $order->user_id = $user->id;
            $order->total_price = ($cartElement_group->sum('price') + 9.99);
            if ($delivery == 'Dostawa')
            {
                $order->delivery_price = 9.99;
            }
            else {
                $order->delivery_price = 0;
            }
            $order->order_price = $cartElement_group->sum('price');
            $order->discount_price = 0;
            $order->delivery_time = $now;
            $order->order_status_id = 1;
            $order->delivery_city = $city;
            $order->payment = $payment;
            $order->delivery = $delivery;
            
            $order->Save();

            foreach($cartElement_group as $cartElement)
            {
                $orderElement = new OrderElement;
                $orderElement->order_id = $order->id;
                $orderElement->cart_element_id = $cartElement->id;
                $orderElement->restaurant_id = $cartElement->restaurant_id;
                $orderElement->dishes_id = $cartElement->dishes_id;
                $orderElement->dish_id = $cartElement->dishes_id;
                $orderElement->price = $cartElement->price;
                $orderElement->discount_price = 0;
                $orderElement->amount = $cartElement->amount;
                $orderElement->order_element_status_id = 1;
                $orderElement->Save();
            }
        }
        
        $cart->cart_status_id = 2;
        $cart->Save();

        return view('order.index', [
            'orders' => Order::where('user_id',$userId)->get()   ]);
    }

    // Szczegóły zamówienia
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