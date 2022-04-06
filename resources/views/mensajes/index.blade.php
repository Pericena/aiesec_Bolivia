@extends('adminlte::page')

@section('title', 'AIESEC-BOL')
@section('content_header')
@stop


@section('content')
    <br>
    <div class="card text-dark">
        <div class="card-header  text-center">
            <h3><b>Bandeja de Correos</b></h3>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive" style="overflow: auto">
                <table class="table table-striped" id="mensajes" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Observación</th>
                            <th scope="col">Opciones</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($contacto as $contactos)
                            <tr>
                                <td>
                                    {{ $contactos->id }}
                                </td>
                                <td>
                                    {{ $contactos->correo }}
                                </td>

                                <td>
                                    @if ($contactos->estado == null)
                                        Sin ver
                                    @else
                                        {{ $contactos->estado }}
                                    @endif

                                </td>
                                <td>
                                    <form action="{{ route('contactos.destroy', $contactos) }}" method="POST">

                                        <a href="{{ route('contactos.edit', $contactos) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px"><i class="fas fa-edit"></i> Editar</a>
                                        @csrf

                                        @method('delete')
                                        <button onclick="return confirm('¿ESTA SEGURO DE  BORRAR?')" type="submit"
                                            value="Borrar" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
                                            Eliminar</button>

                                    </form>
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
            $('#mensajes').DataTable();
        });
    </script>
@stop
