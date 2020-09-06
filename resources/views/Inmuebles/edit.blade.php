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
                        <input type="text" class="form-control" id="name" placeholder="Nombre"
                               value="{{$inmueble->nombre}}" name="nombre">
                    </div>
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select name="venta_renta">
                            <option value="Venta" @if(($inmueble->venta_renta)=='Venta') selected @endif>Venta</option>
                            <option value="Renta" @if(($inmueble->venta_renta)=='Renta') selected @endif>Renta</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="propiedad">Tipo de propiedad</label>
                        <select name="propiedad">
                            @foreach($propiedades as $propiedad)
                                <option value="{{$propiedad->id}}"
                                        @if(($inmueble->id_propiedad)== ($propiedad->id)) selected @endif>{{$propiedad->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="ubicacion">Ubicacion</label>
                        <select name="ubicacion">
                            @foreach($ubicaciones as $ubicacion)
                                <option value="{{$ubicacion->id}}"
                                        @if(($inmueble->id_ubicacion) == ($ubicacion->id)) selected @endif>{{$ubicacion->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Ciudad">Ciudad</label>
                                <input type="text" class="form-control" id="Ciudad" placeholder="Ciudad"
                                       value="{{$inmueble->ciudad}}" name="ciudad">

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="Municipio">Municipio</label>
                                <input type="text" class="form-control" id="Municipio" placeholder="Municipio"
                                       value="{{$inmueble->municipio}}" name="municipio">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="Precio">Precio</label>
                                <input type="number" step="0.1" class="form-control" id="Precio" placeholder="Precio"
                                       value="{{$inmueble->precio}}" name="precio">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="M2T">M2 del Terreno</label>
                                <input type="text" class="form-control" id="M2T" placeholder="M2 del Terreno"
                                       value="{{$inmueble->m2Terreno}}" name="m2t">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="m2c">M2 de Construccion</label>
                                <input type="text" class="form-control" id="m2c" placeholder="M2 de Construccion"
                                       value="{{$inmueble->m2Cons}}" name="m2c">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="agua">Agua</label>
                                <input type="text" class="form-control" id="agua" placeholder="Agua"
                                       value="{{$inmueble->agua}}" name="agua">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="elect">Electricidad</label>
                                <input type="text" class="form-control" id="elect" placeholder="Electricidad"
                                       value="{{$inmueble->elect}}" name="elect">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="des">Descripción</label>
                        <input type="text" class="form-control" id="des" placeholder="Descripción"
                               value="{{$inmueble->extracto}}" name="extracto">

                    </div>
                    @if(($inmueble->img)!=null)
                        <h4>Imagen de portada/Thumbnail actual:</h4>
                        <img src="{{asset('uploads/'.$inmueble->img)}}" alt="img" width="300vw">
                    @endif

                    <div class="form-group" style="margin-top: 5%">
                        <label for="img">Imagen Portada/Thumbnail</label>
                        <input type="file" name="img">
                    </div>

                    @if(($inmueble->pdf)!=null)
                        <h4>PDF actual:</h4>
                        <a href="{{asset('uploads/'.$inmueble->pdf)}}" target="_blank">PDF Actual </a>
                    @endif
                    <div class="form-group" style="margin-top: 5%">
                        <label for="pdf">PDF</label>
                        <input type="file" name="pdf">
                    </div>

                    <input type="hidden" name="img_aux" value="{{$inmueble->img}}">
                    <input type="hidden" name="pdf_aux" value="{{$inmueble->pdf}}">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>

            </div>
        </div>
    </div>
@endsection
