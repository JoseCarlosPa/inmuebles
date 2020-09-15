@extends('layouts.app',[
    'elementName' => 'inicio',

])
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
    <div class="container-xlg" style="margin: 5%">
        <div class="row">
            @foreach($resultados as $resultado)
                <div class="col-sm-4 ">
                    <a href="{{route('inmuebles.show',$resultado->id)}}" style="text-decoration: none">
                        <div class="card mycard" style="width: 100%;margin-top:10%;height: 27vw ">

                            <img src="{{asset('uploads/'.$resultado->img)}}" width="100%" >
                            <div class="card-body">
                                <p style="color: #b84345" class="tarjeta">{{$resultado->nombre}}</p>
                                <p style="color: black;font-size: 1.5vw" class="tarjeta">{{$resultado->precio}} <button style="background: #b84345;color:white;border-radius: 5px;border: none;margin-left: 10px;">{{$resultado->venta_renta}}</button> </p>
                                <div class="row" style="font-size: 12px">
                                    <div class="col-sm-4">
                                        <p style="color: black" class="tarjeta">{{$resultado->elect}}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p style="color: black" class="tarjeta">{{$resultado->agua}}</p>
                                    </div>
                                    <div class="col-sm-4">
                                        <p style="color: black;" class="tarjeta">{{$resultado->m2Terreno}}</p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>


@endsection
