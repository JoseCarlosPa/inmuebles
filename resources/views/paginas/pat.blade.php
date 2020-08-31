@extends('layouts.app')
@section('title','Insignia | Contacto ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/pags/sanpe.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/im-sp.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <p class="text-nova">
                    4 VILLAS <br><br>
                    1 LABORATORIO <br><br>
                    Funcional para producción de peces de ornato <br><br>
                    GRAN NÚMERO DE ÁRBOLES FRUTALES
                    <br><br>
                    PRECIO: $5,000,000
                </p>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>UBICACIÓN</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi1-sp.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi2-sp.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 40 MINUTOS DEL CENTRO DE LA PAZ</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi3-sp.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/img2-sp.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 35 MINUTOS DE TODOS LOS SANTOS</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi4-sp.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/im3-sp.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 1.2 HORAS DE LOS CABOS</h4>
            </div>
        </div>

        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>CARACTERÍSTICAS</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img src="{{asset('images/pags/caract-sp.png')}}" alt="san pedro" width="100%">
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4><l style="color: red">SUPERFICIE DE TERRENO</l> 6,575 M2 / <l style="color: red">CONSTRUCCIÓN:</l> 575M2</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <img src="{{asset('images/pags/mapa-sp.png')}}" alt="san pedro" width="100%">
            </div>

        </div>
        <br><br><br>
        <!--CArrousel  -->

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-70" src="{{asset('images/pags/vi-sp.png')}}"alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-70" src="{{asset('images/pags/v2-sp.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-70" src="{{asset('images/pags/v3-sp.png')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Fin carrousel-->

        <br><br><br>
        <div class="row">
            <div class="col-sm-12 text-left">
                <h4>OTRAS CONSTRUCCIONES</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 text-center">

                    </div>
                    <div class="col-sm-8 text-left">
                        <p class="text-nova">
                            TALLER <br>36 m2 n Acero y durorock
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 text-center">

                    </div>
                    <div class="col-sm-8 text-left">
                        <p class="text-nova">
                            TORTUGUERO 30m de diámetro <br><br> n Sistema de entrada y salida de agua n Bombas de desagüe
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 text-center">

                    </div>
                    <div class="col-sm-8 text-left">
                        <p class="text-nova">
                            ALBERCA 13 m2
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 text-center">

                    </div>
                    <div class="col-sm-8 text-left">
                        <p class="text-nova">
                            BAÑO EXTERIOR 7 m2
                        </p>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 text-left">
                        <p class="text-nova">
                            TEJABAN 90 m2 <br>n Altura: 4.5 n Estacionamiento (vehículos o lanchas)
                        </p>
                    </div>
                    <div class="col-sm-8 text-left">
                        <p class="text-nova">
                            ALJIBE 40,000 L
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href=""><button class="button-contacto"> Descargar PDF</button></a>
            </div>
        </div>
        <br><br>



    </div>


@endsection
