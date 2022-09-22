<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ConsejoPunto;
use App\Models\Soporte;
use App\Models\Agenda;
use App\Models\Estado;

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

    public function consejo_punto()
    {
        return $this->belongsTo(ConsejoPunto::class, 'consejo_id');
    }

    public function soporte()
    {
        return $this->belongsTo(Soporte::class, 'punto_id');
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class, 'agenda_id');
    }

    public function estados()
    {
        return $this->hasMany(Estado::class, 'estado_id');
    }
}
