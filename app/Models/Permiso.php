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

    public function roles(){
        return $this->belongsToMany(Role::class, 'permiso_role');
    }

    //no se porque quitaron lo que yo puse
    //lo de abajo lo quite y lo puse como yo lo habia dejado 
    //porque creo que esta mal porque un permiso puede pertenecer a muchos roles
    //en cambio lo de abajo dice que a un permiso solo le pertenece un role_permiso
   /*  public function permiso_role()
    {
        return $this->belongsTo(PermisoRole::class, 'permiso_id');
    } */

}
