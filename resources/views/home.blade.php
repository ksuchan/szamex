@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="site-slogan">
            Brak czasu na przygotowanie <span class="color">jedzenia</span>?
        </h1>
        <h2 class="slogan-subtitle">Wybierz jedną z naszych restauracji,<br />by rozkoszować jedzeniem!</h2>
        <a href="#" class="button">Wybierz restaurację</a>

        <div class="socialmedia">
            <div class="icon">
                <a href="#">
                    <img src="{{ asset('images/twitter.png')}}">
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <img src="{{ asset('images/social2.png')}}">
                </a>
            </div>
            <div class="icon">
                <a href="#">
                    <img src="{{ asset('images/instagram.png')}}">
                </a>
            </div>
        </div>
    </div>
@endsection
