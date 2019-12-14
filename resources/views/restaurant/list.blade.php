@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section-title">
            Wybierz restaurację
        </div>

        <div class="flex-wrapper restaurant-listing">
            @foreach (['Słodki świat', 'Swojsko', 'Owocowo', 'Zdrowa krowa', 'Ryboświat', 'Ziarenko'] as $restaurant)
            <div class="flex-item">
                <div class="restaurant-teaser">
                    <div class="image">
                        <div class="media">
                            <img src="https://placekeanu.com/420/237" />
                        </div>
                        <div class="rating">4.5</div>
                        <div class="choose"><a href="#">Wybieram</a></div>
                    </div>
                    <div class="content">
                        <div class="title">{{ $restaurant }}</div>
                        <div class="badges">
                            <div class="badge pink">Polska</div>
                            <div class="badge blue">12 km</div>
                        </div>
                        <div class="people">
                            <div class="people-item">
                                <div class="media">
                                    <img src="{{ asset('images/20x20.png') }}" />
                                </div>
                            </div>
                            <div class="people-item">
                                <div class="media">
                                <img src="{{ asset('images/20x20.png') }}" />
                                </div>
                            </div>
                            <div class="people-item">
                                <div class="media">
                                <img src="{{ asset('images/20x20.png') }}" />
                                </div>
                            </div>
                            <div class="people-item">
                                <div class="media">
                                <img src="{{ asset('images/20x20.png') }}" />
                                </div>
                                <span class="additionall">+2</span>
                            </div>
                        </div>
                        <div class="address">
                            Opole ul. Patyzantów 357b
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    <div>
@endsection