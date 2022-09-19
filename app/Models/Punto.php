<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    use HasFactory;

    protected $table = 'puntos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'titulo',
        'descripcion',
        'acuerdo_instrucciones',
        'agenda_id',
        'estado_id',
        'fecha_ultima_actualizacion'
    ];

    public function agenda()
    {
    }

    public function estado()
    {
    }
}
