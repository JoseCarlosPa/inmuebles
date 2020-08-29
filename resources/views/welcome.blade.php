@extends('layouts.app')
@section('title','Insignia | Inicio ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ini.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <div class="container-fluid">
        <div class="row botones-buscar">
            <div class="col-sm-3 borders">
                <select name="venta-renta">
                    <option value="N/A" selected>Venta/Renta</option>
                    <option value="venta" >Venta</option>
                    <option value="renta" >Renta</option>
                </select>
            </div>
            <div class="col-sm-3 borders">
                <select name="tipo">
                    <option value="N/A" selected>Tipo de Propiedad</option>
                    @foreach($propiedades as $propiedad)
                        <option value="{{$propiedad->name}}">{{$propiedad->name}}</option>
                    @endforeach

                </select>
            </div>
            <div class="col-sm-3 borders">
                <select name="ubicacion">
                    <option value="N/A" selected>Ubicacion</option>
                    @foreach($ubicaciones as $ubicacion)
                        <option value="{{$ubicacion->name}}">{{$ubicacion->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-sm-3 buscar">
                <button type="submit" class="search-button">
                Buscar <img src="{{asset('images/search.svg')}}" alt="icono buscar" class="search-icon">
                </button>
            </div>

        </div>
    </div>
    <br>
    <div class ="container">
        <br><br><br>
        <div class ="row">
            <div class ="col-sm-12">
                <h3 id="titulo-propiedad"><strong>RANCHO TEMÁTICO</strong> EN VENTA <strong>EN BAJA CALIFORNIA SUR</strong></h3>
            </div>
        </div>
        <br><br><br>
        <div class ="row">
            <div class ="col-sm-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{asset('images/fondos/carrousel1.png')}}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/fondos/carrousel1.png')}}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{asset('images/fondos/carrousel1.png')}}" alt="Third slide">
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
            </div>
        </div>
    </div>

@endsection
