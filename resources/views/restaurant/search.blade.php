@extends('layouts.app')

@section('content')
    <div class="restaurant-selection">
        <div class="content">
            <div class="container">
<<<<<<< HEAD
                <div class="form-restaurant-selection">
=======
                <form action="{{ route('restaurant.index')}}" method="get" class="form-restaurant-selection">
>>>>>>> f37e0c36dcb1bfeb896fdff24dde0e1d068d3bea
                    <div class="select-city">
                        <label>Wybierz miasto</label>
                        <div class="select-wrapper">
                            <select>
                                <option>Opole</option>
                                <option>Wrocław</option>
                                <option>Warszawa</option>
                                <option>Kraków</option>
                            </select>
                        </div>
                    </div>

                    <div class="select-kitchen">
                        <label>Wybierz kuchnię</label>
                        <div class="select-wrapper">
                            <select>
                                <option>Wszystkie</option>
                                <option>Włoska</option>
                                <option>Grecka</option>
                                <option>Śląska</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="select-button">
                        <a href="{{ route('restaurants.list') }}"><button type="submit">Pokaż restauracje</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection