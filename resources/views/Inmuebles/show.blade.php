@extends('layouts.app')
@section('title','Insignia | Filtrado ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ser.png')}}" class="fondo-inicio" alt="fondo inicio">
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
    <br><br>
    <div class="container">

        <div class="row">
            @foreach($resultados as $resultado)
                <div class="col-sm-4">
                    <div class="card" style="width: 100%;margin-top:10%; height: 30vw">
                        <img class="card-img-top" src="{{asset('uploads/'.$resultado->img)}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$resultado->nombre}}</h5>
                            <p class="card-text">{{$resultado->extracto}}</p>

                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-12 text-right ">
                                    <a href="{{route('inmuebles.show',$resultado->id)}}" class="btn btn-primary">ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
