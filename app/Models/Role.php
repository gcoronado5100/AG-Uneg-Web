<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Permiso;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre'
    ];

    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'consejo_role_permiso');
    }


    public function permisos()
    {
        return $this->belongsToMany(Permiso::class, 'permiso_role');
    }
}
