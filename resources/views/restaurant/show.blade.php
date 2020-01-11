@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="restaurant-single">
            <div class="flex-wrapper">
                <div class="flex-item restaurant-description">
                    <div>
                        <div class="title">{{ $restaurant->name }}</div>
                        <div class="description">
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
                        </div>
                    </div>
                </div>
                <div class="flex-item restaurant-menu">
                    <div>
                        <div class="header">
                            <div class="title">Nasze menu</div>
                            <div class="description">Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</div>
                        </div>
                        <div class="flex-wrapper">
                            @for ($c = 0; $c < 2; $c++)
                                <div class="flex-item menu-category">
                                    <div class="menu-category-title">Pizza</div>
                                    @foreach($restaurant->dishes as $dish)
                                        <div class="menu-item">
                                            <div class="title">{{ $dish->name  }}</div>
                                            {{--<div class="sub-title">--}}
                                                {{--{{ ( $dish->vegan ? 'Vegańskie' : '' ) }}--}}
                                                {{--{{ ( $dish->spicy ? 'Pikantne' : '' ) }}--}}
                                                {{--{{ ( $dish->gluten ? 'Bezglutenowe' : '' ) }}--}}
                                            {{--</div>--}}
                                            <div class="components">{{ $dish->ingredients }}</div>
                                            <div class="add-to-cart">
                                                <a href="{{ route('cartElement.create', ['dish' => $dish]) }}" class="order-button">Zamów</a>
                                            </div>
                                            <div class="price">{{ $dish->price }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
@endsection