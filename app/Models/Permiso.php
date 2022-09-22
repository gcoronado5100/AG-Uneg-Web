<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PermisoRole;

class Permiso extends Model
{
    use HasFactory;

    protected $table = "permisos";
    protected $primaryKey = "id";

    protected $fillable = [
        'nombre',
    ];

    public function permiso_role()
    {
        return $this->belongsTo(PermisoRole::class, 'permiso_id');
    }

}
