@extends('layouts.app')

@section('content')

<h2> Lista zamówień do realizacji </h2>

<table cellpadding="10">
    <thead>
        <tr>
            <th>
                Akcja:
            </th>
            <th>
                Kod zamówienia:
            </th>
            <th>
                Wartość zamówienia:
            </th>
            <th>
                Maksymalna data dostawy:
            </th>
            <th>
                Adres docelowy:
            </th>
            <th>
                Miasto docelowe:
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($orders->where('order_status_id',1) as $order)
            <tr>
                <td>
                    <a href="{{ route('restaurant.details', ['order' => $order]) }}">
                        Szczegóły
                    </a>
                <br/>
                    <a href="{{ route('restaurant.get', ['order' => $order]) }}">
                        Podejmnij
                    </a>
                <br/>
                    <a href="{{ route('restaurant.discard', ['order' => $order]) }}">
                        Odrzuć
                    </a>
                </td>
                <td>
                         {{ $order->order_code }}                        
                </td>
                <td>
                          {{ $order->total_price}}      
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
                    <p>Brak zamówień do realizacji</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


<br/>
<br/>
<br/>
<h2> Lista zamówień w realizacji </h2>

<table cellpadding="10">
    <thead>
        <tr>
            <th>
                Akcja:
            </th>
            <th>
                Kod zamówienia:
            </th>
            <th>
                Wartość zamówienia:
            </th>
            <th>
                Maksymalna data dostawy:
            </th>
            <th>
                Adres docelowy:
            </th>
            <th>
                Miasto docelowe:
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($orders->where('order_status_id',2) as $order)
            <tr>
                <td>
                    <a href="{{ route('restaurant.release', ['order' => $order]) }}">
                        Wydaj
                    </a>
                </td>
                <td>
                         {{ $order->order_code }}                        
                </td>
                <td>
                          {{ $order->total_price}}      
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
                    <p>Nie posiadasz zamówień w realizacji</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>



@endsection