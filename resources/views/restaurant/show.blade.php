<h1>{{ $restaurant->name  }}</h1>
<p>Jadłospis:</p>
<ul>
    @foreach($restaurant->dishes as $dish)
        <li>
            <b>
                {{ $dish->name  }}
                <sup>
                    {{ ( $dish->vegan ? 'Vegańskie' : '' ) }}
                    {{ ( $dish->spicy ? 'Pikantne' : '' ) }}
                    {{ ( $dish->gluten ? 'Bezglutenowe' : '' ) }}
                </sup>
            </b><br>
            <small>{{ $dish->ingredients }}</small>
            <br>
            <div class="price">{{ $dish->price  }} pln</div>
        </li>
    @endforeach
</ul>
<p>Godziny otwarcia</p>
<table>
    @foreach( $restaurant->openingHours as $h )
        <tr>
            <td>
                {{ $h->day }}
            </td>
            <td>
                {{ $h->from . ' - ' . $h->to  }}
            </td>
        </tr>
    @endforeach
</table>