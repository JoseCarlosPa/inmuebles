@extends('layouts.admin_app')
@section('title','Inmuebles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-right">
                <a data-toggle="modal" data-target="#agregar_in">
                    <button class="btn btn-outline-primary">Agregar Inmueble</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <table id="example" class="display nowrap" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Renta/venta</th>
                        <th>Tipo</th>
                        <th>Ubicacion</th>
                        <th>Editar</th>
                        <th>Eliminar</th>

                    </tr>
                    </thead>

                    <tbody>

                    @foreach($inmuebles as $inmueble)
                        <tr>
                            <td>{{$inmueble->id}}</td>
                            <td>{{$inmueble->nombre}}</td>
                            <td>{{$inmueble->venta_renta}}</td>
                            <td>
                                @foreach($propiedades as $propiedad)
                                    @if(($inmueble->id_propiedad) == $propiedad->id)
                                        {{$propiedad->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($ubicaciones as $ubicacion)

                                    @if(($inmueble->id_ubicacion) == $ubicacion->id)
                                        {{$ubicacion->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a href="{{route('inmuebles.edit',$inmueble->id)}}">
                                    <button class="btn btn-outline-warning">Editar</button>
                                </a>
                            </td>
                            <td>
                                <form action="/inmuebles/del/{{$inmueble->id}}"
                                      method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-outline-danger"
                                            onclick="confirm('{{ __("¿Estás seguro de que quieres eliminar este inmueble?") }}') ? this.parentElement.submit() : ''">
                                        {{ __('Eliminar') }}
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="agregar_in" tabindex="-1" role="dialog" aria-labelledby="agregar_tipo"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Inmueble</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('inmuebles.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group">
                            <label for="venta_renta">Tipo</label>
                            <select name="venta_renta">
                                <option value="Venta" selected>Venta</option>
                                <option value="Renta">Renta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="venta_renta">Tipo de propiedad</label>
                            <select name="propiedad">
                                @foreach($propiedades as $propiedad)
                                    <option value="{{$propiedad->id}}" selected>{{$propiedad->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="venta_renta">Ubicacion</label>
                            <select name="ubicacion">
                                @foreach($ubicaciones as $ubicacion)
                                    <option value="{{$ubicacion->id}}" selected>{{$ubicacion->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>



@endsection




