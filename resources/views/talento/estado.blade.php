@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
    <h1>Estado de Talento</h1>
@stop

@section('content')

    <form method="post" action="{{ url('talento/vista_estado/estado_t') }}">

        @csrf
    
        <input type="hidden" name="id" value="{{$talento->id}}">
    

        

        <h5>Estado del mensaje:</h5>
        <select name="estado" type="text"class="focus form-control form-group col-md-3">
            <option value="Sin ver">Sin Ver</option>
            <option value="Pendiente">Pendiente</option>
            <option value="Realizado">Realizado</option>
        </select>

        <br>
        <button type="submit" class="btn btn-primary"><i class="fas fa-pen-alt"></i> Guardar</button>
        <a class="btn btn-danger" href="{{ route('talentos.index') }}"><i class="fas fa-arrow-left"></i> Volver</a>

    </form>
@stop
