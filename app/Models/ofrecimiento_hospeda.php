<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofrecimiento_hospeda extends Model
{
    use HasFactory;
    protected $table='ofrecimiento_hospeda'; 
    protected $fillable = ['habitacion_unica', 'habitacion_compa','servicios','desayuno','almuerzo','cena','otros'];
    public $timestamps = false;
    
    public function hospeda_internacional()
    {
        return $this->hasOne('App\Models\hospeda_internacional','idofrecimiento','id');
    }
}
