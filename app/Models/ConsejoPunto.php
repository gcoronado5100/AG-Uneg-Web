<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Consejo;
use App\Models\Punto;

class ConsejoPunto extends Model
{
    use HasFactory;

    protected $table = 'consejo_puntos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'consejo_id',
        'punto_id',
    ];

    public function consejos()
    {
        return $this->hasMany(Consejo::class, 'consejo_id');
    }

    public function puntos()
    {
        return $this->hasMany(Punto::class, 'punto_id');
    }
}
