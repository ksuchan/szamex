<section>
        <a href="{{ route('cart.create') }}">Dodaj nowy</a>

    <table cellpadding="10">
        <thead>
            <tr>
                <th>
                    Koszyk:
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
            @forelse($carts as $cart)
                <tr>
                    <td>
                        <a href="{{ route('cart.show', ['cart' => $cart->id]) }}">
                            Nr: {{ $cart->ordinal_number }}
                        </a>
                    </td>
                    <td>
                           {{ $cart->cartStatus->name }}
                        
                    </td>
                    <td>
                        <a href="{{ route('cart.remove', ['cart' => $cart]) }}">Usuń</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>Brak koszyków</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>