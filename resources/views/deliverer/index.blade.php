@extends('layouts.app')

@section('content')

<h2> Realizacje do podjęcia </h2>

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
                Adres restauracji:
            </th>
            <th>
                Miasto restauracji:
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
        @forelse($orders->where('supplier_id',0) as $order)
            <tr>
                <td>
                    <a href="{{ route('deliverer.get', ['order' => $order]) }}">
                        Podejmnij
                    </a>
                    <a href="{{ route('deliverer.discard', ['order' => $order]) }}">
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
                        {{ $order->restaurant->street }} {{ $order->restaurant->number }}              
                </td>
                <td>
                        {{ $order->restaurant->city }}                     
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
                    <p>Brak zamówień do dostarczenia</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<br/>
<br/>
<br/>
<br/>

<h2> Realizacje zamówień w trakcie </h2>

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
                Adres restauracji:
            </th>
            <th>
                Miasto restauracji:
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
        @forelse($orders->where('supplier_id', '<>',0) as $order)
            <tr>
                <td>
                    <a href="{{ route('deliverer.delivered', ['order' => $order]) }}">
                        Dostarczono
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
                        {{ $order->restaurant->street }} {{ $order->restaurant->number }}              
                </td>
                <td>
                        {{ $order->restaurant->city }}                     
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
                    <p>Brak zamówień w trakcie</p>
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

@endsection