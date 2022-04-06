@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Empresas / ONGs</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url('empresa/excel')}}" class="btn btn-sm btn-success"><i class="fas fa-file-excel" style="margin-right: 3px"></i> Exportar a Excel</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive" style="overflow: auto">    
                <table class="table table-striped" id="empresas" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre de la empresa / ONG</th>
                            <th scope="col">Nombre del representante</th>
                            <th scope="col">Correo del empresa</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->id}}</td>
                                <td>{{ $empresa->nombre_empresa }}</td>
                                <td>{{ $empresa->nombre_representante }}</td>
                                <td>{{ $empresa->correo_representante }}</td>
                                <td>{{ $empresa->estado }}</td>
                                <td>
                                    <a href="{{url('empresa/ver/'.$empresa->id)}}" style="margin-right: 5px" class="btn btn-primary btn-sm"><i class="fas fa-eye" style="margin-right: 5px"></i>Ver<a>
                                        <a href="{{ url('empresa/vista_estado_e', $empresa->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-check-circle" style="margin-right: 2px"></i> Estado</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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
