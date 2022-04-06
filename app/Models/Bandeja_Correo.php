<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bandeja_Correo extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $fillable = ['correo'];
}
