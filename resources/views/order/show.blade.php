<a href="{{ route('order.index') }}">Powrót do listy zamówień</a>
<h1>{{ $order->id  }}</h1>
<p>Zamówienia:</p>
<ul>
    @foreach($order->dishes as $dish)
        <li>
            <b>
                {{ $dish->id  }}
                // <sup>
                    // {{ ( $dish->vegan ? 'Vegańskie' : '' ) }}
                    // {{ ( $dish->spicy ? 'Pikantne' : '' ) }}
                    // {{ ( $dish->gluten ? 'Bezglutenowe' : '' ) }}
                // </sup>
            </b>
			// <br>
            // <small>{{ $dish->ingredients }}</small>
            // <br>
            // <div class="price">{{ $dish->price  }} pln</div>
        </li>
    @endforeach
</ul>
// <p>Godziny otwarcia</p>
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