<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consejo_puntos extends Model
{
    public $table = 'consejo_punto';
    protected $fillable = [
        'consejo_id',
        'punto_id'
    ];

    public function Consejo()
    {
        return $this->belongsTo("App\Models\Consejo", "consejo_id", "id");
    }

    public function puntos()
    {
        return $this->belongsTo("App\Models\puntos", "punto_id", "id");
    }
}
