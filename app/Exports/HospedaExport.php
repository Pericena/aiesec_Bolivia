<?php

namespace App\Exports;

use App\Models\hospeda_internacional;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class HospedaExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('hospedajes.excel', [
            'hospedas' => hospeda_internacional::join('ofrecimiento_hospeda', 'hospeda_internacional.idofrecimiento', 'ofrecimiento_hospeda.id')
            ->select('hospeda_internacional.id', 'hospeda_internacional.nombre', 'hospeda_internacional.celular', 'hospeda_internacional.correo',
            'hospeda_internacional.ciudad_reside', 'hospeda_internacional.direccion', 'hospeda_internacional.cantidad_voluntarios', 
            'hospeda_internacional.hospedar_fecha', 'hospeda_internacional.hospedar_hora', 'hospeda_internacional.formar_parte', 
            'hospeda_internacional.saber_programa', 'hospeda_internacional.decir_algo', 'ofrecimiento_hospeda.habitacion_unica as unica', 
            'ofrecimiento_hospeda.habitacion_compa as compa', 'ofrecimiento_hospeda.servicios as services', 'ofrecimiento_hospeda.desayuno as desa',
            'ofrecimiento_hospeda.almuerzo as almu', 'ofrecimiento_hospeda.cena as cen', 'ofrecimiento_hospeda.otros as otro')->get()
        ]);
    }
}