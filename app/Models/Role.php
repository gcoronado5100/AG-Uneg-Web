<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PermisoRole;
use App\Models\ConsejoRoleUser;

class Role extends Model
{
    use HasFactory;

    protected $table = "roles";
    protected $primaryKey = "id";

    protected $fillable = [
        'nombre',
    ];

    public function usuarios(){
        return $this->belongsToMany(User::class, 'consejo_role_permiso');
    }

    public function permisos(){
        return $this->belongsToMany(Permiso::class, 'permiso_role');
    }

    //no se porque quitaron lo que yo puse
    //lo de abajo lo quite y lo puse como yo lo habia dejado 
    //porque creo que esta mal porque 
    //un rol puede pertenecer a muchos permisos y
    //un rol puede pertenecer amuchos usuarios
    //en cambio lo de abajo dice que a un rol solo le pertenece un role_permiso
    //en cambio lo de abajo dice que a un rol solo le pertenece un consejo_user

    /* public function permiso_role()
    {
        return $this->belongsTo(PermisoRole::class, 'role_id');
    }

    public function consejo_user()
    {
        return $this->belongsTo(ConsejoRoleUser::class, 'role_id');
    } */

    
}
