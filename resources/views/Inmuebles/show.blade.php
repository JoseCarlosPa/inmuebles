@extends('layouts.app',[
    'elementName' => 'inicio',

])
@section('title','Insignia | Filtrado ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ini.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <div class="container-fluid">
        <form action="/filtro" method="post">
            @csrf
            <div class="row botones-buscar">
                <div class="col-sm-3 borders">
                    <select name="venta_renta">
                        <option value="N/A" selected>Venta/Renta</option>
                        <option value="venta" >Venta</option>
                        <option value="renta" >Renta</option>
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

                <div class="col-sm-3 buscar">
                    <button type="submit" class="search-button">
                        Buscar <img src="{{asset('images/search.svg')}}" alt="icono buscar" class="search-icon">
                    </button>
                </div>

            </div>
        </form>
    </div>
    <br>
    <div class="container">

        <div class="row">
            @foreach($resultados as $resultado)
                <div class="col-sm-4 ">
                    <a href="{{route('inmuebles.show',$resultado->id)}}" style="text-decoration: none">
                        <div class="card mycard" style="width: 100%;margin-top:10%;height: 31vw ">
                            @if(($resultado->img)== NULL )
                                <img src="{{asset('images/image-base.jpg')}}" width="100%">
                            @else
                                <img src="{{asset('images/'.$resultado->img)}}" width="100%">
                            @endif

                            <div class="card-body">
                                <p class="tarjeta nombre-tarjeta">{{$resultado->nombre}}</p>
                                <p class="tarjeta precio">{{$resultado->precio}}
                                    <button class="button-venta">{{$resultado->venta_renta}}</button>
                                </p>
                                <hr width="100%">
                                <div class="row" style="font-size: 12px">
                                    <div class="col-sm-3">
                                        <p style="color: black" class="tarjeta"><img src="{{asset('images/area.svg')}}"
                                                                                     width="20vw">
                                            <l class="text-tarjeta">{{$resultado->m2Terreno}}</l>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p style="color: black" class="tarjeta"><img
                                                src="{{asset('images/under-construction.svg')}}" width="20vw">
                                            <l class="text-tarjeta">{{$resultado->m2Cons}}</l>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p style="color: black;" class="tarjeta"><img
                                                src="{{asset('images/water.svg')}}" width="20vw">
                                            <l class="text-tarjeta">{{$resultado->agua}}</l>
                                        </p>
                                    </div>
                                    <div class="col-sm-3">
                                        <p style="color: black;" class="tarjeta"><img
                                                src="{{asset('images/thunder.svg')}}" width="20vw">
                                            <l class="text-tarjeta">{{$resultado->elect}}</l>
                                        </p>
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
