@extends('layouts.app')
@section('title','Insignia | Guanajuato ')
@section('content')

    <br><br>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>GUANAJUATO</h1>
            </div>
        </div>

        <div class="row">
            @foreach($resultados as $resultado)
                <div class="col-sm-4">
                    <a href="{{route('inmuebles.show',$resultado->id)}}">
                        <div class="card" style="width: 100%;margin-top:10%; height: 22vw">
                            <img class="card-img-top" src="{{asset('uploads/'.$resultado->img)}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 1.6vw">{{$resultado->nombre}}</h5>
                            </div>
                            <br>
                            <div class="text-center"><button class="btn-inicio">{{$resultado->venta_renta}}</button></div>
                            <br>
                            <div class="row bottom-inicio">
                                <div class="col-sm-3 brd">{{$resultado->m2Terreno}}</div>
                                <div class="col-sm-3 brd">{{$resultado->m2Cons}}</div>
                                <div class="col-sm-3 brd">{{$resultado->agua}}</div>
                                <div class="col-sm-3 "style="font-size: 13px">{{$resultado->elect}}</div>
                            </div>

                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </div>

    <div class="container-fluid">
        <br><br>
        <form action="/filtro" method="post">
            @csrf
            <div class="row ">
                <div class="col-sm-2"></div>
                <div class="col-sm-2 borders ">
                    <select name="venta_renta">
                        <option value="N/A" selected>Venta/Renta</option>
                        <option value="Venta">Venta</option>
                        <option value="Renta">Renta</option>
                    </select>
                </div>
                <div class="col-sm-2 borders">
                    <select name="tipo">
                        <option value="N/A" selected>Tipo de Propiedad</option>
                        @foreach($propiedades as $propiedad)
                            <option value="{{$propiedad->id}}">{{$propiedad->name}}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-sm-2 borders">
                    <select name="ubicacion">
                        <option value="N/A" selected>Ubicacion</option>
                        @foreach($ubicaciones as $ubicacion)
                            <option value="{{$ubicacion->id}}">{{$ubicacion->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-2 buscar">
                    <button type="submit" class="search-button">
                        Buscar <img src="{{asset('images/search.svg')}}" alt="icono buscar" class="search-icon">
                    </button>
                </div>
                <div class="col-sm-2"></div>

            </div>
        </form>
    </div>
@endsection
