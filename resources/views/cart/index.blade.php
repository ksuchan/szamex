<section>
    <table cellpadding="10">
        <thead>
            <tr>
                <th>
                    Lp:
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($carts as $cart)
                <tr>
                    <td>
                        <a href="{{ route('cart.show', ['cart' => $cart->id]) }}">
                            {{ $cart->ordinal_number }}
                        </a>
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