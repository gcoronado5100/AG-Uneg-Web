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

    public function agenda()
    {
        return $this->belongsTo("App\Models\agenda", "agenda_id", "id");
    }

    public function estados()
    {
        return $this->belongsTo("App\Models\estados", "estado_id", "id");
    }
}
