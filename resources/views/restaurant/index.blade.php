@extends('layouts.app')

@section('content')

<section>
    <table cellpadding="10">
        <thead>
            <tr>
                <th>
                    Nazwa:
                </th>
                <th>
                    Adres:
                </th>
                <th>
                    Godziny otwarcia
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse($restaurants as $restaurant)
                <tr>
                    <td>
                        <a href="{{ route('restaurant.show', ['restaurant' => $restaurant->id]) }}">
                            {{ $restaurant->name }}
                        </a>
                    </td>
                    <td>
                        {{ $restaurant->address  }}
                    </td>
                    <td>
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
                    </td>
                </tr>
            @empty
                <tr>
                    <td>
                        <p>Brak restauracji</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection