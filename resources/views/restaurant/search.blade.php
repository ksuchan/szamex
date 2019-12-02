@extends('layouts.app')

@section('content')
    <div class="restaurant-selection">
        <div class="content">
            <div class="container">
                <form class="form-restaurant-selection">
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
                                <option>Włoska</option>
                                <option>Grecka</option>
                                <option>Śląska</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="select-button">
                        <button type="submit">Pokaż restauracje</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection