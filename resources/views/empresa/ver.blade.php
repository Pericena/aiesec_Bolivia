@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Información de la empresa {{$empresa->nombre_empresa}}</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <a class="btn btn-danger" href="{{ route('empresas.index') }}">Volver</a>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Nombre de la empresa / ONGs: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->nombre_empresa}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Nombre del representante: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->nombre_representante}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Cargo del representante: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->cargo_representante}}" readonly>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Página Web de la Institución / Facebook:  </label>
                    @if (strlen($empresa->pagina_web)==0)
                        <input type="text" name="name" class="form-control" value="No tiene página web" disabled>
                    @else
                        <a href="{{$empresa->pagina_web}}" target="_blank" rel="noopener noreferrer"><input type="text" name="name" class="form-control text-info" value="Click aquí para abrir la página web" disabled></a>
                    @endif
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Celular de la Institución: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->celular}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Teléfono de la Institución: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->telefono}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Email del representante de la Institución: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->correo_representante}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Email de la Institución:  </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->correo_empresa}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿En qué departamento se encuentra la empresa/ONG?: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->departamento}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Dirección de la empresa/ONG: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->direccion}}" disabled>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="form-group">
                    <label for="name">¿A qué se dedica la empresa/ONG?: </label>
                    <textarea class="form-control" name="name" rows="3" disabled>{{$empresa->dedicacion}}</textarea>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">¿A través de qué medio se entero de AIESEC?: </label>
                    <input type="text" name="name" class="form-control" value="{{$empresa->saber_de_AIESEC}}" disabled>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="form-group">
                    <label for="name">Nombre de la persona si se marcó Amigos/Familiares: </label>
                    @if (strlen($empresa->nombre_amigo)==0)
                        <input type="text" name="name" class="form-control" value="No se marcó Amigos/Familiares" disabled>
                    @else
                        <input type="text" name="name" class="form-control" value="{{$empresa->nombre_amigo}}" disabled>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#empresas').DataTable();
        });
    </script>
@stop