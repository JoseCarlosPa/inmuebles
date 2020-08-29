@extends('layouts.app')
@section('title','Insignia | Filtrado ')
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('images/fondos/fondo_ser.png')}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        @foreach($resultados as $resultado)
        <div class="row">
                <div class="col-sm-12">
                    <div class="card" style="width: 100%;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$resultado->nombre}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <a href="#" class="btn btn-primary">ver más</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
        </div>
            <br><br>
        @endforeach
    </div>
@endsection
