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
    <script src="{{ asset('js/main.js') }}" defer></script>

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
        <a class="navbar-brand" href="/"><img src="{{asset('images/logo.png')}}" alt="logo insignia" class="img-logo">
        </a>
        <div style="margin-left: 0"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'inicio' ? 'active' : '' }}" href="/" >INICIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'quien' ? 'active' : '' }}" href="/quienes-somos">QUIÉNES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'prop' ? 'active' : '' }}" href="/propiedades-all">PROPIEDADES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'bolsa' ? 'active' : '' }}" href="/bolsa-de-trabajo">BOLSA DE TRABAJO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'contact' ? 'active' : '' }}" href="/contacto">CONTACTO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link in {{ $elementName == 'noticias' ? 'active' : '' }}" href="/contacto">NOTICIAS</a>
                </li>
            </ul>
        </div>
        <div class="text-right">
            <p class="text-nova" style="color: #2C2925;font-size: 14px"><a style="color: #2C2925"
                                                                           href="mailto:contacto@insigniabienesraices.com">contacto@insigniabienesraices.com</a>
                <br>Plaza Downtown, La Paz, B.C.S. / Plaza Forum, León, GTO. <br>+52.612.138.3999 / +52.477.927.4841</p>
        </div>
    </nav>


    <main>
        @yield('content')
    </main>
    <br><br><br>
    <footer>
        <div class="mycontainer">
            <br>
            <div class="row text-center">
                <div class="col-sm-12">
                    <h5 style="color: white">SÍGUENOS</h5>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row text-center">
                                <div class="col-md-4 col-sm-12"></div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-1"></div>
                                        <div class="col-md-2 col-sm-12" >
                                            <a href="">
                                                <img src="{{asset('images/facebook.svg')}}" alt="facebok" width="25vw">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-12" >
                                            <a href="">
                                                <img src="{{asset('images/linkedin.svg')}}" alt="linkedin" width="25vw">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <a href="">
                                                <img src="{{asset('images/twitter.svg')}}" alt="twitter" width="25vw">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <a href="">
                                                <img src="{{asset('images/youtube.svg')}}" alt="youtube" width="25vw">
                                            </a>
                                        </div>
                                        <div class="col-md-2 col-sm-12">
                                            <a href="">
                                                <img src="{{asset('images/instagram.svg')}}" alt="instagram" width="25vw">
                                            </a>
                                        </div>
                                        <div class="col-md-1"></div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-sm-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row text-left">
                <div class="col-sm-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><strong>INSIGNIA EXCELENCIA INMOBILIARIA</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p style="color: #b5b5b5;">En INSIGNIA te asesoramos en cada paso de tu inversión patrimonial. En la adquisición de
                                la tierra, asesoría en la construcción y en la búsqueda del cliente ideal. Más que una
                                propiedad, te ofrecemos un modelo de negocio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><strong>MENÚ</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="text-decoration-none" style="list-style:none;margin-left: -10%;color: #b5b5b5">
                                <li><a href="/">INICIO</a></li>
                                <li><a href="/quienes-somos">QUIÉNES SOMOS</a></li>
                                <li><a href="/propiedades-all">PROPIEDADES</a></li>
                                <li><a href="/bolsa-de-trabajo">BOLSA DE TRABAJO</a></li>
                                <li>CONTACTO</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <p><strong>contáctanos</strong></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <p style="color: #b5b5b5">Av. Ignacio Altamirano No. 590. plaza Downtown Local B5 y B6. Zona Central, La Paz,
                                BCS</p>
                        </div>
                    </div>
                    <div class="row text-right">
                        <div class="col-md-2">
                            <img src="{{asset('images/log_compra.png')}}" alt="img" width="50vw">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/log_canc.png')}}" alt="img" width="40vw">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/log_ampi.png')}}" alt="img" width="50vw">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/log_aspi.png')}}" alt="img" width="50vw">
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset('images/log_conca.png')}}" alt="img" width="50vw">
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <br><br>
    </footer>
</div>
</body>
</html>
