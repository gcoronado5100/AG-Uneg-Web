<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class puntos extends Model
{
    public $table = 'puntos';
    protected $fillable = [
        'titulo',
        'descripcion',
        'acuerdo_instrucciones',
        'agenda_id',
        'estado_id',
        'ultima_actualizacion'
    ];
}
