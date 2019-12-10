<a href="{{ route('cart.index') }}">Powrót do listy koszyków</a>


<h2>Koszyk o numerze: {{ $cart->ordinal_number  }}</h2>



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
                    Id restauracji:
                </th>
                <th>
                    Restauracja:
                </th>
                <th>
                    Cena:
                </th>
                <th>
                    Ilośc:
                </th>
                <th>
                    Status:
                </th>
                <th>
                    Akcja:
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($cart->cartElements as $cartElement)
                <tr>
                    <td>
                             {{ $cartElement->dishes_id }}                        
                    </td>
                    <td>
                             Wystąpił błąd poczad wyświetlania nazwy dania{{-- {{ $cartElement->dish->name}}                         --}}
                    </td>
                    <td>
                            {{ $cartElement->restaurant_id }} 
                        
                    </td>
                    <td>
                            {{ $cartElement->restaurant->name }}                          
                    </td>
                    <td>
                            {{ $cartElement->price }}                          
                    </td>
                    <td>
                            {{ $cartElement->amount }}                          
                    </td>
                    <td>
                            {{ $cartElement->cartElementStatus->name }}
                    </td>
                    <td>
                        <a href="{{ route('cartElement.remove', ['cartElement' => $cartElement]) }}">Usuń</a>
                        <br>
                        <a href="{{ route('cartElement.addAmount', ['cartElement' => $cartElement]) }}">+</a>
                        <br>
                        <a href="{{ route('cartElement.removeAmount', ['cartElement' => $cartElement]) }}">-</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>Brak pozycji w koszyku</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>


    <br>
    <br>
    <br>
    <a href="{{ route('order.realizeOrder', ['cart' => $cart]) }}">Realizuj zamówienie!</a>