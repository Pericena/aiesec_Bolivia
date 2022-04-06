<?php

namespace App\Http\Controllers;

use App\Models\hospeda_internacional;
use App\Models\ofrecimiento_hospeda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\HospedaExport;

class HospedaIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofrecimientos = ofrecimiento_hospeda::all();
        $hospedajes = hospeda_internacional::all();
        return view('hospedajes.index', compact('ofrecimientos', 'hospedajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('hospedajes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $ofrecer = new ofrecimiento_hospeda();
            // habitacion unica
            if (!$request->habitacion_unica) {
                $ofrecer->habitacion_unica = 0;
            } else {
                $ofrecer->habitacion_unica = $request->habitacion_unica;
            }
            // habitacion compartida

            if (!$request->habitacion_compa) {
                $ofrecer->habitacion_compa = 0;
            } else {
                $ofrecer->habitacion_compa = $request->habitacion_compa;
            }
            //servicios

            if (!$request->servicios) {
                $ofrecer->servicios = 0;
            } else {
                $ofrecer->servicios = $request->servicios;
            }
            // desayuno

            if (!$request->desayuno) {
                $ofrecer->desayuno = 0;
            } else {
                $ofrecer->desayuno = $request->desayuno;
            }

            //almuerzo

            if (!$request->almuerzo) {
                $ofrecer->almuerzo = 0;
            } else {
                $ofrecer->almuerzo = $request->almuerzo;
            }

            //cena

            if (!$request->cena) {
                $ofrecer->cena = 0;
            } else {
                $ofrecer->cena = $request->cena;
            }

            // otros

            if (!$request->otros) {
                $ofrecer->otros = 0;
            } else {
                $ofrecer->otros = $request->otros;
            }

            $ofrecer->save();

            $talento = new hospeda_internacional();
            $talento->nombre = $request->nombre;
            $talento->celular = $request->celular;
            $talento->correo = $request->correo;
            $talento->ciudad_reside = $request->ciudad_reside;
            $talento->direccion = $request->direccion;
            $talento->cantidad_voluntarios = $request->cantidad_voluntarios;
            $talento->hospedar_fecha = $request->hospedar_fecha;
            $talento->hospedar_hora = $request->hospedar_hora;
            $talento->formar_parte = $request->formar_parte;
            $talento->saber_programa = $request->saber_programa;
            $talento->decir_algo = $request->decir_algo;
            $talento->idofrecimiento = $ofrecer->id;
            $talento->estado = 'Pendiente';
            $talento->save();
            DB::commit();
            return redirect()->to('/')->with('message', 'Formulario almacenado exitosamente');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect('/')->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(hospeda_internacional $hospedaje)
    {
        $ofrecer = ofrecimiento_hospeda::findOrFail($hospedaje->idofrecimiento);
        return view('hospedajes.show', compact('hospedaje', 'ofrecer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function exportExcel()
    {
        return Excel::download(new HospedaExport, 'hospeda_internacional.xlsx');
    }

    public function vista_estado($id){
        
        $hospedaje = hospeda_internacional::find($id);
       
        return view('hospedajes.estado', compact('hospedaje'));

    }

    public function estadoXd(Request $request){
        
        $hospedaje = hospeda_internacional::find($request->id);
        $hospedaje->estado = $request->estado;
        $hospedaje->save();
        return redirect()->route('hospedajes.index');

    }
}
