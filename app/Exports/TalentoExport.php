<?php

namespace App\Exports;

use App\Models\talento_global;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TalentoExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        $universidades = File::get(base_path().'/public/lista_universidades.json');
        $universidades = json_decode($universidades)->universidad;
        return view('talento.excel', [
            'talentos' => talento_global::get()
        ], compact('universidades'));
    }
}
