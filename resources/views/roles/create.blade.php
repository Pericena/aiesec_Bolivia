@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Crear Rol</h1>
@stop

@section('content')
    <div class="card">


        <div class="card-body">
            <form action="{{ route('roles.store') }}" method="post" >
                @csrf
                {{-- @error('name')
                    <div class="alert alert-danger" role="alert">
                        ¡Debes rellenar el campo nombre del rol!
                    </div>
                @enderror --}}
                <label for="name">Ingrese el nombre del rol</label>
                <input type="text" name="name" class="form-control" required> <br>



                <label for="permisos">Asignación de permisos</label><br>

                <div class="form-check">
                    <div class="form row">
                        @foreach ($permisos as $permiso)
                            <div class="form-group col-md-3">

                                <input type="checkbox" value="{{ $permiso->id }}" name="permisos[]"
                                    class="form-check-input"> {{ $permiso->name }} <br>
                            </div>
                        @endforeach
                    </div>
                </div> <br>
                
                <button class="btn btn-danger btn-sm" type="submit">Crear Rol</button>
                <a class="btn btn-primary btn-sm" href="{{ route('roles.index') }}">Volver</a>
            </form>

        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
