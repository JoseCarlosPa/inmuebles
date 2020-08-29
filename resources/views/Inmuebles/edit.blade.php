@extends('layouts.admin_app')
@section('title','Editar Inmueble')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('inmuebles.update',$inmueble->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" id="name" placeholder="Nombre" value="{{$inmueble->nombre}}" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select name="venta_renta">
                            <option value="venta" @if(($inmueble->venta_renta)=='venta') selected @endif>Venta</option>
                            <option value="renta" @if(($inmueble->venta_renta)=='renta') selected @endif>Renta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="propiedad">Tipo de propiedad</label>
                        <select name="propiedad">
                            @foreach($propiedades as $propiedad)
                                <option value="{{$propiedad->id}}" @if(($inmueble->id_propiedad)== ($propiedad->id)) selected @endif>{{$propiedad->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <select name="ubicacion">
                            @foreach($ubicaciones as $ubicacion)
                                <option value="{{$ubicacion->id}}" @if(($inmueble->id_ubicacion) == ($ubicacion->id)) selected @endif>{{$ubicacion->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="extracto">Extracto</label>
                        <input type="text" class="form-control" id="extracto" placeholder="Extracto" value="{{$inmueble->extracto}}" name="extracto">

                    </div>
                    @if(($inmueble->img)!=null)
                        <h4>Imagen de portada actual:</h4>
                        <img src="{{asset('uploads/'.$inmueble->img)}}" alt="img" width="300vw">
                    @endif

                    <div class="form-group" style="margin-top: 5%">
                        <label for="img">Imagen Portada</label>
                        <input type="file"  name="img">
                    </div>

                    @if(($inmueble->pdf)!=null)
                        <h4>PDF actual:</h4>
                        <a href="{{asset('uploads/'.$inmueble->pdf)}}" target="_blank">PDF Actual </a>
                    @endif
                    <div class="form-group" style="margin-top: 5%">
                        <label for="pdf">PDF</label>
                        <input type="file"  name="pdf">
                    </div>


                    <input type="hidden" name="img_aux" value="{{$inmueble->img}}">
                    <input type="hidden" name="pdf_aux" value="{{$inmueble->pdf}}">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>
        </div>
    </div>
@endsection
