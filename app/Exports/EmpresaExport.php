<?php

namespace App\Exports;

use App\Models\empresa_ong;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class EmpresaExport implements FromView, ShouldAutoSize
{
    public function view(): View
    {
        return view('empresa.excel', [
            'empresas' => empresa_ong::get()
        ]);
    }
}