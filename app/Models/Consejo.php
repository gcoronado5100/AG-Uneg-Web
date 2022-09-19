<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consejo extends Model
{
    use HasFactory;

    protected $table = 'consejos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'titulo',
        'descripcion'
    ];

    public function users()
    {
        return $this->belongsToMany(Users::class, 'consejo_rol_user');
    }
}
