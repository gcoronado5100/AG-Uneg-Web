<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo_Punto extends Model
{
    use HasFactory;

    protected $table = 'consejo_puntos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'consejo_is',
        'punto_id',
    ];

    public function consejo()
    {

    }

    public function punto()
    {

    }
}
