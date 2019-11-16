<section>
    <table cellpadding="10">
        <thead>
            <tr>
                <th>
                    Id:
                </th>
                // <th>
                    // Adres:
                // </th>
                // <th>
                    // Godziny otwarcia
                // </th>
            </tr>
        </thead>
        <tbody>
            @forelse($orders as $order)
                <tr>
                    <td>
                        <a href="{{ route('order.show', ['order' => $order->id]) }}">
                            {{ $order->id }}
                        </a>
                    </td>
                    // <td>
                        // {{ $order->address  }}
                    // </td>
                    // <td>
                        // <table>
                            // @foreach( $order->openingHours as $h )
                                // <tr>
                                    // <td>
                                        // {{ $h->day }}
                                    // </td>
                                    // <td>
                                        // {{ $h->from . ' - ' . $h->to  }}
                                    // </td>
                                // </tr>
                            // @endforeach
                        // </table>
                    // </td>
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
</section>