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
    <script src="{{ asset('js/admin.js') }}" defer></script>



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/2o0m1ify6z124tv6lnunnur1funofnm5wnw44mo2nln4r71r/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body>
<div id="app">
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{route('inmuebles.index')}}">Inmbuebles</a>
        <a href="{{route('ubicaciones.index')}}">Ubicaciones</a>
        <a href="{{route('propiedades.index')}}">Tipos de Propiedad</a>
        <a data-toggle="modal" data-target="#exampleModal" href="#">Salir</a>
    </div>

    <!-- Use any element to open the sidenav -->
    <span onclick="openNav()"><button class="btn-dark">Abrir</button></span>

    <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <main id="main">
        @yield('content')
    </main>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <div class="modal-body">
                    De verdad quieres cerrar tu sesion?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Si</button>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
