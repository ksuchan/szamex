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
    <body>
        <img src="{{ asset('images/logo.png') }}" />

        <div class="dish">
            <div class="image">
                <div class="media">
                    <img src="{{ asset('images/420x237.png') }}" />
                </div>
                <div class="rating">4.5</div>
                <div class="choose"><a href="#">Wybieram</a></div>
            </div>
            <div class="content">
                <div class="title">Słodki świat</div>
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

        <h1>Nagłówek 1</h1>
        <h2>Nagłówek 2</h2>
        <h3>Nagłówek 3</h3>
        <h4>Nagłówek 4</h4>
        <h5>Nagłówek 5</h5>
        <h6>Nagłówek 6</h6>

        <button>Przycisk</button>
        
        <div class="button">Przycisk jako div</div>
        <br /><br />
        <form>
            <input type="text" placeholder="e-mail" /><br />
            <input type="email" placeholder="e-mail" /><br />
            <input type="password" placeholder="hasło" />
        </form>

        
    </body>
</html>