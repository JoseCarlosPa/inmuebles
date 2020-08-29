@extends('layouts.app')
@section('title','Insignia |'.$datos->nombre)
@section('content')
    <div class="bg-inicio">
        <img src="{{asset('uploads/'.$datos->img)}}" class="fondo-inicio" alt="fondo inicio">
    </div>
    <br><br>
    <div class="container">
        <h1>{{$datos->nombre}}</h1>
        <img src="{{asset('uploads/'.$datos->pdf)}}" alt="imagen" width="100%">
    </div>
@endsection
