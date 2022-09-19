<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function consejo()
    {
    }

    public function punto()
    {
    }
}
