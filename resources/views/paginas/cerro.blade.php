@extends('layouts.app')
@section('title','Insignia | Contacto ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/pags/cerro.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/img-cerr.png')}}" alt="cerro" width="100%">
            </div>
            <div class="col-sm-6">
                <p class="text-nova">
                    GRAN EXTENSIÓN <br></br>1'004,000M2 <br>DOS FRENTES <br>De carretera urbanizada
                </p>
                <p class="text-nova text-center">
                    GRAN OPORTUNIDAD DE INVERSIÓN PARA DESARROLLO <br>PRECIO $40,176,000
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
                <img src="{{asset('images/pags/ubi-cerr.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi2-cerr.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 25 MINUTOS DEL CENTRO DE LA PAZ</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi3-cerr.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi4-cerr.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 20 MINUTOS DE PLAYA EL SALTITO</h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi5-cer.png')}}" alt="san pedro" width="100%">
            </div>
            <div class="col-sm-6">
                <img src="{{asset('images/pags/ubi6-cerr.png')}}" alt="san pedro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>A 45 MINUTOS DEL AEROPUERTO INTERNACIONAL DE LA PAZ</h4>
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
                <img src="{{asset('images/pags/carac-cerr.png')}}" alt="san pedro" width="100%">
            </div>

        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>
                    <l style="color: red">SUPERFICIE DE TERRENO</l>
                    100.4has /
                    <l style="color: red">CONSTRUCCIÓN:</l>
                    / 600m2
                </h4>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 quienes-main">
                <h4>CONSTRUCCIÓN</h4>
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
                    <img class="d-block w-70" src="{{asset('images/pags/vi-cerr.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-70" src="{{asset('images/pags/vi-cerr.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-70" src="{{asset('images/pags/vi-cerr.png')}}" alt="Third slide">
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
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12 text-center quienes-main">
                        <h4>PLANTA ALTA</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-left">
                        <p class="text-nova">
                            200m2 <br>Baño con Jacuzzi y vestidor <br>Área de Lavado <br>Cocina <br>Sala <br>Comedor<br> Recámara
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-12 text-center quienes-main">
                        <h4>PLANTA BAJA</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <p class="text-nova">
                            200m2 <br>Medio baño <br>Área abierta <br></br>Cocina
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-6 text-center">
               <img src="{{asset('images/pags/serv-cerr.png')}}" alt="cerro" width="100%">
            </div>
            <div class="col-sm-6 text-center">
                <img src="{{asset('images/pags/ser2-cerr.png')}}" alt="cerro" width="100%">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="">
                    <button class="button-contacto"> Descargar PDF</button>
                </a>
            </div>
        </div>
        <br><br>


    </div>


@endsection
