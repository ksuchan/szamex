@extends('layouts.app')

@section('content')

<a href="{{ route('order.index') }}">Powrót do listy zamówień</a>
<h1>Zamówienie o identyfikatorze: {{ $order->id  }}</h1>


<table cellpadding="10">
    <thead>
        <tr>
            <th>
                Identyfikator restauracji:
            </th>
            <th>
                Restauracja:
            </th>
            <th>
                Id dania:
            </th>
            <th>
                Danie:
            </th>
            <th>
                Koszt dania:
            </th>
            <th>
                Ilość:
            </th>
            <th>
                Udzielony rabat:
            </th>
            <th>
                Status:
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse($order->orderElements as $orderElement)
            <tr>
                <td>
                         {{ $orderElement->restaurant_id }}                        
                </td>
                <td>
                         {{ $orderElement->restaurant->name }}                        
                </td>
                <td>
                          {{ $orderElement->dishes_id}}      
                </td>
                <td>
                         {{ $orderElement->dish}}                        
                </td>
                <td>
                        {{ $orderElement->price }}                     
                </td>
                <td>
                        {{ $orderElement->price }}                     
                </td>
                <td>
                        {{ $orderElement->discount_price }}                     
                </td>
                <td>
                        {{ $orderElement->orderElementStatus->name }}                     
                </td>
                
            </tr>
        @empty
            <tr>
                <td>
                    <p>Brak elementów w zamówieniu!</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>


@endsection