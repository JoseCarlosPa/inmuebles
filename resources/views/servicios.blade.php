@extends('layouts.app')
@section('title','Insignia | Servicios ')
@section('content')
    <br><br>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-6">
                <a href="/baja-california" style="text-decoration: none; color: #BA1E22">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('images/servicios-bg.png')}}" alt="IMG" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h2>BAJA CALIFORNIA SUR</h2>
                        </div>
                    </div>
                </a>
                <br><br>
                <a href="/queretaro" style="text-decoration: none; color: #BA1E22">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('images/servicios-qro.png')}}" alt="IMG" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-sm-12">
                            <br>
                            <h2>QUERÉTARO</h2>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="/guanajuato" style="text-decoration: none; color: #BA1E22">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('images/servicios-guan.png')}}" alt="IMG" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <br>
                        <div class="col-sm-12">
                            <br>
                            <h2>GUANAJUATO</h2>
                        </div>
                    </div>
                </a>
                <br><br>
                <a href="/san-luis-potosi" style="text-decoration: none; color: #BA1E22">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('images/servicios-snl.png')}}" alt="IMG" width="100%">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h2>SAN LUIS POTOSÍ</h2>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <br><br><br><br>
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
