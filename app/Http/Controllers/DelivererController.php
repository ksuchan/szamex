<?php

namespace App\Http\Controllers;

use App\Deliverer;
use App\Cart;
use App\CartElement;
use App\Order;
use App\OrderElement;
use Illuminate\Http\Request;

class DelivererController extends Controller
{
    public function index()
    {
        $user = auth()->user(); 
        //dd($user);
        // Dodatkowo sprawdzic czy to jest dostawca
        return view('deliverer.index', [
            'orders' => Order::with('deliverer')
            // ->leftJoin('deliverers', 'orders.id', '=', 'deliverers.order_id'
            // , 'deliverers', $user->id, '=', 'deliverers.user_id')
            ->whereIn('supplier_id',[0, $user->id])->whereIn('order_status_id', [2, 3])->distinct()->get()   ]);
    }
    
    // Odrzucenie zamówienia
    public function discard(Order $order)
    {
        $user = auth()->user(); 

        $deliverer = new Deliverer;
        $deliverer->user_id = $user->id;
        $deliverer->order_id = $order->id;
        $deliverer->result = 0;
        $deliverer->Save();
        return view('deliverer.index', [
            'orders' => Order::where('supplier_id',0)->whereIn('order_status_id', [2, 3])->get()   ]);
    }

    // Pobranie(akceptacja) zamówienia
    public function get(Order $order)
    {
        $user = auth()->user(); 

        $deliverer = new Deliverer;
        $deliverer->user_id = $user->id;
        $deliverer->order_id = $order->id;
        $deliverer->result = 1;
        $deliverer->Save();

        $order->supplier_id = $user->id;
        $order->Save();

        return view('deliverer.index', [
          'orders' => Order::where('supplier_id',0)->whereIn('order_status_id', [2, 3])->get()   ]);
    }
    
    // Pobranie(akceptacja) zamówienia
    public function delivered(Order $order)
    {
        $order->order_status_id = 6;
        $order->Save();

        return view('deliverer.index', [
          'orders' => Order::where('supplier_id',0)->whereIn('order_status_id', [2, 3])->get()   ]);
    }
    
}