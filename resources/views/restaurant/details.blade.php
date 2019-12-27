@extends('layouts.app')

@section('content')

<a href="{{ route('restaurant.realize') }}">Powrót do listy zamówień do realizacji</a>
<h1>Zamówienie o identyfikatorze: {{ $order->id  }}</h1>


<table cellpadding="10">
    <thead>
        <tr>
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
        </tr>
    </thead>
    <tbody>
        @forelse($order->orderElements as $orderElement)
            <tr>
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
                        {{ $orderElement->amount }}                     
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