@extends('layouts.admin_app')
@section('title','Inmuebles')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-right">
                <button class="btn btn-outline-primary">Agregar Inmuebles</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
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
                            <td>{{$inmueble->id_propiedad}}</td>
                            <td>{{$inmueble->id_ubicacion}}</td>
                            <td>
                                <button class="btn btn-outline-warning">Editar</button>
                            </td>
                            <td>
                                <button class="btn btn-outline-danger">Eliminar</button>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </div>



@endsection




