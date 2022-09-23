<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Consejo;
use App\Models\Punto;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agendas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'titulo',
        'consejo_id',
        'fecha_apertura',
        'fecha_cierre',
    ];

    public function consejos()
    {
        return $this->hasMany(Consejo::class, 'consejo_id');
    }

    public function puntos()
    {
        return $this->belongsTo(Punto::class, 'agenda_id');
    }
}
