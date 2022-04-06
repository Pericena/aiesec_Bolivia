@extends('adminlte::page')

@section('title', 'AIESEC-BOL')

@section('content_header')
   <div style="padding-bottom: 0.4px;"></div>
@stop

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row" style="padding-left: 15px; padding-right: 15px;">
                            <a href="{{ route('hospedajes.index') }}">
                                <button type="button" class="btn btn-primary">
                                    <i class="fas fa-arrow-left"></i> Atras
                                </button>
                            </a>
                            &nbsp;&nbsp;&nbsp;
                            <div style="display:table; text-align: center;">
                                <h4 class="text-primary" style="display:table-cell; vertical-align:middle;">Hospedajes
                                    Internacionales</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">Nombre Completo *:</label>
                                <input class="form-control" maxlength="50" type="text" value="{{ $hospedaje->nombre }}"
                                disabled>
                            </div>

                            
                            <br>
                            <br>
                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">Celular *: </label>
                                <input class="form-control" maxlength="10" type="text" value="{{ $hospedaje->celular }}"
                                    disabled>
                            </div>

                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">Correo *: </label>
                                <input class="form-control" type="email" value="{{ $hospedaje->correo }}" disabled>
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">Dirección donde vives *: </label>
                                <input class="form-control" maxlength="50" type="text"
                                    value="{{ $hospedaje->direccion }}" disabled>
                            </div>

                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">¿Cuántos voluntarios puedes hospedar? *: </label>

                                <input class="form-control" maxlength="50" type="text"
                                    value="{{ $hospedaje->cantidad_voluntarios }}" disabled>



                            </div>

                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <label class="text-info">Fecha: </label>
                                <input class="form-control" type="text" value="{{ $hospedaje->hospedar_fecha }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <div class="form-group">
                                    <label class="text-info">Hora: </label>
                                    <input class="form-control" type="text" value="{{ $hospedaje->hospedar_hora }}"
                                        disabled>
                                </div>
                            </div>


                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <div class="form-group">
                                    <label class="text-info">¿Qué puedes ofrecerle al voluntario? *: </label>
                                    @if ($ofrecer->habitacion_unica > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Habitación única
                                        
                                        </label>
                                    </div>
                                    @endif
                                    @if ($ofrecer->habitacion_compa > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Habitación compartida
                                            
                                        </label>
                                    </div>
                                    @endif
                                    @if ($ofrecer->servicios > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Servicios (Agua, luz, internet, etc.)
                                            
                                        </label>
                                    </div>
                                    @endif 
                                    @if ($ofrecer->desayuno > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Desayuno
                                            
                                        </label>
                                    </div>
                                    @endif
                                    @if ($ofrecer->almuerzo > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Almuerzo
                                            
                                        </label>
                                    </div>
                                    @endif
                                    @if ($ofrecer->cena > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Cena
                                            
                                        </label>
                                    </div>
                                    @endif
                                    @if ($ofrecer->otros > 0)
                                    <div class="form-check">
                                        <label class="form-check-label" for="check1">
                                            
                                                <input type="checkbox" checked disabled> Otros
                                            
                                        </label>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" style="padding-bottom: 1rem;">
                                <div class="form-group">
                                    <label class="text-info">¿Cómo te enteraste del programa Familia Global? *: </label>
                                    <input class="form-control" type="text" value="{{ $hospedaje->saber_programa }}"
                                        disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6" style="padding-bottom: 1rem;">
                                <div class="form-group">
                                    <label class="text-info">¿Por qué quieres formar parte del programa Familia Global? *:
                                    </label>
                                    
                                    <textarea rows="5" class="form-control"
                                        disabled>{{ $hospedaje->formar_parte }}</textarea>
                                </div>
                            </div>
                        
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="text-info">¿Tienes algo para decirnos? </label>
                                
                                    <textarea rows="5" class="form-control"
                                        disabled>{{ $hospedaje->decir_algo }}</textarea>
                                </div>
                            </div>
                        </div>
                        <br>

                    </div>

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
            $('#talentos').DataTable();
        });
    </script>
@stop
