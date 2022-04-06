<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class empresa_ong extends Model
{
    use HasFactory;
    protected $table='empresa_ong'; 
    protected $fillable = ['nombre_empresa', 'nombre_representante', 'cargo_representante', 'pagina_web', 'celular', 'telefono',
    'correo_representante', 'correo_empresa', 'departamento', 'direccion', 'dedicacion', 'saber_de_AIESEC', 'nombre_amigo', 'estado'
    ];
    public $timestamps = false;

    public static function store(Request $request){
        $empresa = new empresa_ong();
        $empresa->nombre_empresa = $request->nombre_empresa;
        $empresa->nombre_representante = $request->nombre_representante;
        $empresa->cargo_representante = $request->cargo_representante;
        $empresa->pagina_web = $request->pagina_web;
        $empresa->celular = $request->celular;
        $empresa->telefono = $request->telefono;
        $empresa->correo_representante = $request->correo_representante;
        $empresa->correo_empresa = $request->correo_empresa;
        $empresa->departamento = $request->departamento;
        $empresa->direccion = $request->direccion;
        $empresa->dedicacion = $request->dedicacion;
        $empresa->saber_de_AIESEC = $request->saber_de_AIESEC;
        $empresa->nombre_amigo = $request->nombre_amigo;
        $empresa->estado = 'Sin Ver';
        $empresa->save();
    }
}
