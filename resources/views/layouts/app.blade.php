<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="{{$view_name}}">
    <div id="app">
        <div class="container">
            <header>
                <div class="logo">
                    <img src="{{ asset('images/logo.png') }}" />
                </div>
                <nav>
                    <ul>
                        <li>
                            <a class="button" href="{{ route('restaurants.search') }}">Wybierz restaurację</a>
                        </li>
                        <li>
                            <a class="button" href="#">Zamówienia</a>
                        </li>
                        <li>
                            <a class="button" href="#">Koszyk</a>
                        </li>
                        <li>
                            @guest
                                <a class="button" href="{{ route('login') }}">Zaloguj</a>
                            @else
                                <a class="button" href="{{ route('logout') }}">Wyloguj</a>
                            @endguest
                        </li>
                    </ul>
                </nav>
            </header>
        </div>
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
