<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class talento_global extends Model
{
    use HasFactory;
    protected $table='talento_global'; 
    protected $fillable = ['nombres','apellidos','edad','correo', 'celular','ciudad_reside','universidad','grado_estudio',
    'carrera','otra_carrera','nivel_ingles','experiencia','area_desarrollo','pasantia_internacional',
    'programa','descubrimiento_programa','medio_contacto','describir_documento', 'documentos', 'estado'
    ];
    public $timestamps = false;

    public static function store(Request $request){
        //dd(json_decode(json_encode($request->documentos)));
        $talento = new talento_global();
        $talento->nombres = $request->nombres;
        $talento->apellidos = $request->apellidos;
        $talento->edad = $request->edad;
        $talento->correo = $request->correo;
        $talento->celular = $request->celular;
        $talento->ciudad_reside = $request->ciudad_reside;
        $talento->universidad = $request->universidad;
        $talento->grado_estudio = $request->grado_estudio;
        $talento->carrera = $request->carrera;
        $talento->otra_carrera = $request->otra_carrera;
        $talento->nivel_ingles = $request->nivel_ingles;
        $talento->experiencia = $request->experiencia;
        $talento->area_desarrollo = $request->area_desarrollo;
        $talento->pasantia_internacional = $request->pasantia_internacional;
        $talento->programa = $request->programa;
        $talento->descubrimiento_programa = $request->descubrimiento_programa;
        $talento->medio_contacto = $request->medio_contacto;
        $talento->describir_documento = $request->describir_documento;
        $talento->estado = $request->estado;
        if($request->hasFile('documentos')){
            $extension = $request->documentos->extension();
            if($extension == "zip" || $extension == "rar" || $extension == "7zip"){
                $nombre = round(microtime(true)) . '.' . $extension;
                Storage::disk('public')->putFileAs('talentos', $request->documentos, $nombre);
                $path = 'talentos/' . $nombre;
                $talento->documentos = $path;
            }
        }
        $talento->save();
    }
}
