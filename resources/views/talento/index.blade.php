@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Pasantías Globales - Talento Global</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <a href="{{url('talento/excel')}}" class="btn btn-sm btn-success"><i class="fas fa-file-excel" style="margin-right: 3px"></i> Exportar a Excel</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive" style="overflow: auto">    
                <table class="table table-striped" id="talentos" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Celular</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($talentos as $talento)
                                <tr>
                                    <td>{{ $talento->id}}</td>
                                    <td>{{ $talento->nombres }}</td>
                                    <td>{{ $talento->apellidos }}</td>
                                    <td>{{ $talento->correo }}</td>
                                    <td>{{ $talento->celular }}</td>
                                    <td>{{ $talento->estado }}</td>
                                    <td >
                                        <a href="{{url('talento/ver/'.$talento->id)}}" style="margin-right: 5px" class="btn btn-primary btn-sm"><i class="fas fa-eye" style="margin-right: 3px"></i> Ver <a> 
                                            
                                        <a href="{{ url('talento/vista_estado_t', $talento->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-check-circle" style="margin-right: 2px"></i> Estado</a>
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
            $('#talentos').DataTable();
        });
    </script>
    
@stop
