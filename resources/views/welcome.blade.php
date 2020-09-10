@extends('layouts.app')
@section('title','Insignia | Inicio ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ini.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <div class="container-fluid">
        <br><br>
        <form action="/filtro" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-3 borders ">
                    <select name="venta_renta">
                        <option value="N/A" selected>Venta/Renta</option>
                        <option value="Venta">Venta</option>
                        <option value="Renta">Renta</option>
                    </select>
                </div>
                <div class="col-sm-3 borders">
                    <select name="tipo">
                        <option value="N/A" selected>Tipo de Propiedad</option>
                        @foreach($propiedades as $propiedad)
                            <option value="{{$propiedad->id}}">{{$propiedad->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-sm-3 borders">
                    <select name="ubicacion">
                        <option value="N/A" selected>Ubicacion</option>
                        @foreach($ubicaciones as $ubicacion)
                            <option value="{{$ubicacion->id}}">{{$ubicacion->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-2">
                    <button type="submit" class="search-button">
                        Buscar <img src="{{asset('images/search.svg')}}" alt="icono buscar" class="search-icon">
                    </button>
                </div>


            </div>
        </form>
    </div>
    <br>
    <div class="container">
        <br>
        <div class="row">
            @foreach($resultados as $resultado)
                <div class="col-sm-4">
                    <a href="{{route('inmuebles.show',$resultado->id)}}" style="text-decoration: none">
                        <div class="card" style="width: 100%;margin-top:10%;">
                            <div class="card-body" style="background-image: url({{asset('uploads/'.$resultado->img)}});background-size: 100%;">
                            <div class="row" style="margin-top: 16%;font-size: 11px">
                                <div class="col-md-12">
                                    <div class="row img-info" >
                                        <div class="col-sm-12 text-left">{{$resultado->elect}}</div>
                                    </div>
                                    <div class="row img-info" style=" width: 6.5vw;">
                                        <div class="col-sm-12 text-left">{{$resultado->agua}}</div>
                                    </div>
                                    <div class="row img-info" style=" width: 8vw;">
                                        <div class="col-sm-12 text-left">{{$resultado->m2Terreno}}</div>
                                    </div>
                                    <div class="row img-info" style=" width: 9vw;">
                                        <div class="col-sm-12 text-left">{{$resultado->m2Cons}}</div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <br>
                            <h5 class="card-title text-center" style="font-size: 1.6vw">{{$resultado->nombre}}</h5>
                            <br>
                            <div class="text-center"><button class="btn-inicio">{{$resultado->venta_renta}}</button></div>
                            <br>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

@endsection
