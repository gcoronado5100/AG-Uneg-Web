<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $table = 'agendas';
    protected $fillable = [
        'titulo',
        'consejo_id',
        'fecha_apertura',
        'fecha_cierre'
    ];
}
