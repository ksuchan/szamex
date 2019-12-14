@extends('layouts.app')

@section('content')
<table cellpadding="10">
    <thead>
        <tr>
            <th>
                Kod zamówienia:
            </th>
            <th>
                Koszt zamówienia:
            </th>
            <th>
                Koszt dostawy:
            </th>
            <th>
                Data dostawy:
            </th>
            <th>
                Adres:
            </th>
            <th>
                Miasto:
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($orders as $order)
            <tr>
                <td>
                         {{ $order->order_code }}                        
                </td>
                <td>
                          {{ $order->total_price}}      
                </td>
                <td>
                        {{ $order->delivery_price }}                     
                </td>
                <td>
                        {{ $order->delivery_time }}                     
                </td>
                <td>
                        {{ $order->delivery_address }}                     
                </td>
                <td>
                        {{ $order->delivery_city }}                     
                </td>
                
                
            </tr>
        @empty
            <tr>
                <td>
                    <p>Brak zamówień</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection