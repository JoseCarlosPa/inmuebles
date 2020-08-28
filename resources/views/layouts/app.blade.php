<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/png" href="{{asset('images/icon.png')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="logo insignia" class="img-logo"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto" >
                <li class="nav-item">
                    <a class="nav-link in" href="#">INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in" href="#">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in" href="#">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in" href="#">BOLSA DE TRABAJO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in" href="#">CONTACTO</a>
                </li>
            </ul>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>

    <footer>
        <div class ="container">
            <hr>
            <div class ="row">
                <div class ="col-sm-3">
                    Copyright y todo lo de derechos
                </div>
                <div class ="col-sm-9">
                    ICONO
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
