@extends('layouts.app')
@section('title','Insignia |'.$datos->nombre)
@section('content')
    <div class="show-bg">
        <div class="mycontainer">
            <div class="row ">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <br>
                            <h1 style="color: white;font-weight: bolder;">{{$datos->nombre}}</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">{{$datos->ciudad}},{{$datos->municipio}}
                                ,@foreach($ubicaciones as $ubicacion)
                                    @if(($datos->id_ubicacion) == $ubicacion->id)
                                        {{$ubicacion->name}}
                                    @endif
                                @endforeach</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <h3 style="color: white">
                                @foreach($tipos as $tipo)
                                    @if(($datos->id_propiedad)== $tipo->id)
                                        {{$tipo->name}}
                                    @endif
                                @endforeach
                            </h3>
                        </div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                            <h3 style="color: white">{{$datos->m2Terreno}}</h3>
                        </div>
                        <div class="col-sm-3">
                            <h3 style="color: white">{{$datos->m2Cons}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <br><br><br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">{{$datos->precio}}</h3>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 style="color: white">{{$datos->venta_renta}}</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <img src="{{asset(asset('uploads/'.$datos->img))}}" width="100%" alt="imagen del lugar">
            </div>
            <div class="col-sm-3 show-bg text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <p style="font-size: 2vw;font-weight: bolder">Descarga el PDF de esta propiedad</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <form action="" method="">
                            <div class="form-group">
                                <input type="text" class="form-control" id="Nombre" placeholder="Nombre"
                                       name="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="correo" placeholder="Correo"
                                       name="email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone" placeholder="Telefono"
                                       name="phone">
                            </div>
                            <br>
                            <a href="{{asset(asset('uploads/'.$datos->pdf))}}" target="_blank">
                                <button type="button" class="btn-download">Descargar</button>
                            </a>
                            <br><br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
