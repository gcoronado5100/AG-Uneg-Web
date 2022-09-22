<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Punto;

class Estado extends Model
{
    use HasFactory;

    protected $table = 'estados';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'estado',
    ];

    public function punto()
    {
        return $this->belongsTo(Punto::class, 'estado_id');
    }
}
